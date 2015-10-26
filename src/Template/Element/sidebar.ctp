<div class="navbar-default sidebar" role="navigation">
    <div class="sidebar-nav navbar-collapse">
        <ul class="nav" id="side-menu">
            <li>
                <a href="<?= $this->Url->build([
                    "controller" => "Pages",
                    "action" => "home"
                ]); ?>">
                    <i class="fa fa-home fa-fw"></i> Home
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa fa-list fa-fw"></i> Mantenedores<span class="fa arrow"></span>
                </a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?= $this->Url->build([
                            "controller" => "Aniolectivos",
                            "action" => "index"
                        ]); ?>">Años Lectivos</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build([
                            "controller" => "Grados",
                            "action" => "index"
                        ]); ?>">Grados</a>
                    </li>
                    <li>
                        <a href="<?= $this->Url->build([
                            "controller" => "Alumnos",
                            "action" => "index"
                        ]); ?>">Alumnos</a>
                    </li>
                </ul>
                <!-- /.nav-second-level -->
            </li>
            <li>
                <a href="<?= $this->Url->build([
                    "controller" => "Matriculas",
                    "action" => "index"
                ]); ?>">
                    <i class="fa fa-book fa-fw"></i> Matrículas
                </a>
            </li>
        </ul>
    </div>
    <!-- /.sidebar-collapse -->
</div>
<!-- /.navbar-static-side -->