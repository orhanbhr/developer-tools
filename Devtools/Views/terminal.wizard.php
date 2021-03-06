<!-- Page Heading -->
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">
            {{LANG['terminal']}} <small> {{LANG['overview']}}</small>
        </h1>

    </div>
</div>
<!-- /.row -->


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-list fa-fw"></i> {{LANG['supportCommands']}}</h3>
            </div>
            <div class="panel-body">
                <div class="list-group">

                    @foreach( $supportCommands as $command ):
                    <a href="/#" class="list-group-item">
                        <i class="fa fa-fw fa-code"></i> @$command:
                    </a>
                    @endforeach:

                </div>

            </div>
        </div>
    </div>

</div>


<div class="row">
    <div class="col-lg-12">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title"><i class="fa fa-terminal fa-fw"></i> PHP {{LANG['terminal']}}</h3>
            </div>
            <div class="panel-body">

                {[$settings = Config::get('ViewObjects', 'terminal')]}

                <style type="text/css">
                    *
                    {
                        margin/: 0;
                        padding/: 0;
                    }

                    input
                    {
                        width/: 85%;
                        outline/:none;
                        border/:none;
                        background/:none;
                    }
                    .content
                    {
                        width/: 100%;
                        margin-bottom/: 15px;

                        text-align/: left;
                        overflow/: auto;
                        background-color/:  @$settings['bgColor']:;
                        color/: @$settings['textColor']:;
                        font-family/: @$settings['textType']:;
                        font-weight/: bold;
                        font-size/: @$settings['textSize']:;
                    }
                    .terminal
                    {
                        border/: 1px solid /#CCC;
                        height/: @$settings['height']:;
                        position/: relative;
                        overflow/: auto;
                        padding-bottom/: 20px;
                        height/: 500px;
                    }

                    .terminal
                    {
                        padding/: 10px;
                        padding-right/: 0;
                    }


                    pre{
                        background/: none;
                        border/:none;
                        margin-top/:-10px;
                        margin-bottom/:-10px;
                        margin-left/:-10px;
                    }
                </style>

                    <div class="content">
        				<div class="terminal" id="terminal" onclick="document.getElementById('command').focus();">

    					<pre></pre>

						<?php echo 'php zerocore > ';?>
						<input type="text" name="command" id="command" autocomplete="off" />

        				</div>
        			</div>

                    <script type="text/javascript">
                        $('/#command').focus();

                        $('/#command').keyup(function(e)
                        {
                            if(e.keyCode == 13)
                            {
                                $.ajax
                                ({
                                    'url'/: '@@siteUrl('system/terminalAjax'):',
                                    'type'/:'post',
                                    'data'/:'command=' + $('/#command').val(),
                                    'success'/:function(data)
                                    {
                                        $('/#command').val("");
                                        $('/#terminal pre').html(data);
                                    }
                                });
                            }
                        });

                        var i = 0;

                        $('/#command').keyup(function(e)
                        {
                            if(e.keyCode == 38)
                            {
                                $.ajax
                                ({
                                    'url'/: '@@siteUrl('system/terminalArrowAjax'):',
                                    'type'/:'post',
                                    'data'/:'index=' + i,
                                    'success'/:function(data)
                                    {
                                        if( ! data )
                                        {
                                            i = 0;
                                        }
                                        else
                                        {
                                            $('/#command').val(data);
                                            i++;
                                        }
                                    }
                                });


                            }
                        });

                        $('/#command').keyup(function(e)
                        {
                            if(e.keyCode == 40)
                            {
                                $.ajax
                                ({
                                    'url'/: '@@siteUrl('system/terminalArrowAjax'):',
                                    'type'/:'post',
                                    'data'/:'index=' + i,
                                    'success'/:function(data)
                                    {
                                        if( ! data )
                                        {
                                            i = 0;
                                        }
                                        else
                                        {
                                            $('/#command').val(data);
                                            i--;
                                        }
                                    }
                                });


                            }
                        });

                    </script>

            </div>
        </div>
    </div>
</div>



<!-- /.container-fluid -->
