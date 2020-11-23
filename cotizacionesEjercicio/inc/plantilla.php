<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="X-UA-Compatible" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title></title>
    
    
</head>
<body>
    <div class="container">
        <div class="b8s-example">
            <nav class="navbar navbar-default">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand">INICIO</a>
                </div>
                <!-- Collection of nav links, forms, and other content for toggling -->
                <div id="navbarCollapse" class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Registro Clientes</a></li>
                        <li><a href="#">Registro Productos</a></li>
                        <li class="dropdown">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">Categor&iacuteas <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Teléfonos</a></li>
                                <li><a href="#">Tabletas</a></li>
                                <li><a href="#">Wearables</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Accesorios</a></li>
                            </ul>
                        </li>
                    </ul>
                    <form class="navbar-form navbar-left">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar" />
                            <span class="input-group-btn">
                                <button type="button" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                            </span>
                        </div>
                    </form>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="#">Login</a></li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="jumbotron">
            <form id="form1" runat="server">
                <div>
                    <asp:ContentPlaceHolder ID="contenido" runat="server">
                    </asp:ContentPlaceHolder>
                </div>
            </form>

        </div>
    </div>
    <!-- /container -->

</body>
</html>