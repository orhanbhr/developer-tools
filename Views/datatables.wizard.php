<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {{LANG['datatables']}} <small> {{LANG['overview']}}</small>
        </h1>

    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div style="cursor:pointer" data-target="/#alterTableProcessTable" data-toggle="collapse"  class="panel-heading">
                <h3 class="panel-title">
                    <i class="fa fa-table fa-fw"></i>

                    {{LANG['alterTableProcess']}}

                    <span><i class="fa fa-angle-down fa-fw"></i></span>
                </h3>

            </div>
            <div id="alterTableProcessTable"  class="collapse panel-body">

                <table class="table table-bordered table-hover table-striped">
                    <thead>
                        <tr>
                            <th><pre><code id="createTableProcess" contenteditable="true">@Import::view('create-table'):</code></pre></th>
                            <th><pre><code id="addColumnProcess" contenteditable="true">@Import::view('add-column'):</code></pre></th>

                        </tr>
                        <tr>
                            <th>@@Form::onclick('alterTable(\'createTable\', \'create-table\')')->class('form-control btn btn-success')->button('update', LANG['createTableButton']):</th>
                            <th>@@Form::onclick('alterTable(\'addColumn\', \'add-column\')')->class('form-control btn btn-success')->button('update', LANG['addColumnButton']):</th>

                        </tr>
                        <tr>
                            <th><pre><code id="renameTableProcess" contenteditable="true">@Import::view('rename-table'):</code></pre></th>
                            <th><pre><code id="renameColumnProcess" contenteditable="true">@Import::view('rename-column'):</code></pre></th>

                        </tr>
                        <tr>
                            <th>@@Form::onclick('alterTable(\'renameTable\', \'rename-table\')')->class('form-control btn btn-info')->button('update', LANG['renameButton']):</th>
                            <th>@@Form::onclick('alterTable(\'renameColumn\', \'rename-column\')')->class('form-control btn btn-info')->button('update', LANG['renameColumnButton']):</th>
                        </tr>
                        <tr>
                            <th><pre><code id="truncateTableProcess" contenteditable="true">@Import::view('truncate-table'):</code></pre></th>
                            <th><pre><code id="modifyColumnProcess" contenteditable="true">@Import::view('modify-column'):</code></pre></th>

                        </tr>
                        <tr>
                            <th>@@Form::onclick('alterTable(\'truncateTable\', \'truncate-table\')')->class('form-control btn btn-warning')->button('update', LANG['truncateButton']):</th>
                            <th>@@Form::onclick('alterTable(\'modifyColumn\', \'modify-column\')')->class('form-control btn btn-warning')->button('update', LANG['modifyColumnButton']):</th>
                        </tr>

                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>


@Import::view('alert-bar.wizard'):

<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-table fa-fw"></i> {{LANG['datatables']}}</h3>
            </div>
            <div class="panel-body">
                <div id="tables" class="list-group">

                    @Import::view('datatables-tables.wizard', ['tables' => $tables]):

                </div>

            </div>
        </div>
    </div>
</div>

<script>hljs.initHighlightingOnLoad();</script>
<script>
function dropTable(table)
{
    if( confirm("@@LANG['areYouSure']:") )
    {
        $.ajax
        ({
            url/:"@@siteUrl('datatables/dropTable'):",
        	data/:"table=" + table,
        	method/:"post",
            dataType:"json",
        	success/:function(data)
        	{
                $('/#tables').html(data.result);

                if( data.status )
                {
                    $('/#success-process').removeClass('hide');
                }
                else
                {
                    $('/#error-process').removeClass('hide');
                    $('/#error-process-content').text(data.error);
                }
        	}
        });
    }
}

function dropColumn(table, column, id)
{
    if( confirm("@@LANG['areYouSure']:") )
    {
        $.ajax
        ({
            url/:"@@siteUrl('datatables/dropColumn'):",
        	data/:{"table":table, "column":column},
        	method/:"post",

        	success/:function(data)
        	{
                $(id).html(data);
        	}
        });
    }
}

function deleteRow(table, column, value, id)
{
    if( confirm("@@LANG['areYouSure']:") )
    {
        $.ajax
        ({
            url/:"@@siteUrl('datatables/deleteRow'):",
        	data/:{"table":table, "column":column, "value":value},
        	method/:"post",

        	success/:function(data)
        	{
                $(id).html(data);
        	}
        });
    }
}

function updateRow(table, ids, id, uniqueKey)
{
    $.ajax
    ({
        url/:"@@siteUrl('datatables/updateRow'):",
    	data/:$('/#' + table).serialize() + '&uniqueKey=' + uniqueKey + '&table=' + table + '&ids=' + ids,
    	method/:"post",

    	success/:function(data)
    	{
            $(id).html(data);

            if( ! data )
            {
                $('/#success-process-' + table).removeClass('hide');
            }
            else
            {
                $('/#error-process-' + table).removeClass('hide');
            }
    	}
    });

}

function updateRows(table, id, uniqueKey)
{
    $.ajax
    ({
        url/:"@@siteUrl('datatables/updateRows'):",
    	data/:$('/#' + table).serialize() + '&table=' + table + '&uniqueKey=' + uniqueKey,
    	method/:"post",

    	success/:function(data)
    	{
            $(id).html(data);

            if( ! data )
            {
                $('/#success-process-' + table).removeClass('hide');
            }
            else
            {
                $('/#error-process-' + table).removeClass('hide');
            }
    	}
    });
}

function addRow(table, id)
{
    $.ajax
    ({
        url/:"@@siteUrl('datatables/addRow'):",
    	data/:$('#' + table).serialize() + '&table=' + table,
    	method/:"post",

    	success/:function(data)
    	{
            $(id).html(data);

            if( data )
            {
                $('/#success-process-' + table).removeClass('hide');
            }
            else
            {
                $('/#error-process-' + table).removeClass('hide');
            }
    	}
    });
}

function alterTable(type, page)
{
    $.ajax
    ({
        url/:"@@siteUrl('datatables/alterTable'):",
    	data/:'content=' + $('/#' + type + 'Process').text() + '&page=' + page,
    	method/:"post",
        dataType/:"json",
    	success/:function(data)
    	{
            $('/#tables').html(data.result);

            if( ! data.error )
            {
                $('/#success-process').removeClass('hide');
            }
            else
            {
                $('/#error-process').removeClass('hide');
                $('/#error-process-content').text(data.error);
            }
    	}
    });
}

function paginationRow(table, start, id)
{
    $.ajax
    ({
        url/:"@@siteUrl('datatables/paginationRow'):",
    	data/:{"table":table, "start":start},
    	method/:"post",

    	success/:function(data)
    	{
            $(id).html(data);
    	}
    });
}
</script>
