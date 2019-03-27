<h2>Ricerca eventi</h2>

<form method="post" enctype="multipart/form-data">


    <div class="row">


        <div class="col-md-10 col-xs-12">


            <div class="form-group">

                <input type="text" class="form-control" name="titolo" placeholder="Nome" value=""/>

            </div>


        </div>


    </div>


    <div class="row">


        <div class="col-md-10 col-xs-12">


            <div class="col-md-7 col-xs-6">

                <div class="form-group">


                    <input type="text" id="datepicker" class="form-control" name="data_evento" placeholder="Data"
                           alt="Data"/>


                </div>

            </div>

            <div class="col-md-5 col-xs-6">

                <div class="form-group">


                    <input type='text' id='timepicker1' class="form-control" name="ora_evento" placeholder="Ora"
                           alt="Ora"/>


                </div>

            </div>

        </div>


    </div>


    <div class="row">


        <div class="col-md-10 col-xs-12">


            <div class="form-group">

                <select name="DropDownRegione" id="ddregione" class="form-control" required onchange="getProvince(this)"
                        onfocus="getProvince(this)">

                    <option value="">Regione</option>


                </select>

            </div>


        </div>


    </div>


    <div class="row">


        <div class="col-md-10 col-xs-12">


            <div class="form-group">

                <select name="DropDownProvincia" id="ddprovincia" class="form-control" required onchange="getAtc(this)"
                        onfocus="getAtc(this)">

                    <option value="">Provincia</option>

                </select>

            </div>


        </div>


    </div>


    <div class="row">


        <div class="col-md-10 col-xs-12">


            <div class="form-group">

                <select name="DropDownAtc" id="ddatc" class="form-control" required onchange="getSquadre(this)">

                    <option value="">A.T.C.</option>

                </select>

            </div>


        </div>


    </div>


    <div class="row">


        <div class="col-md-10 col-xs-12">


            <div class="form-group">

                <select name="DropDownSquadre" id="ddsquadre" class="form-control">

                    <option value="">Squadra</option>


                </select>

            </div>


        </div>


    </div>


    <div class="row">


        <div class="col-md-12 col-xs-12">


            <div class="col-md-2 col-xs-12">

                <div class="form-group">

                    <button type="submit" id="buttonCercaEvento" name="btn-cerca_evento" class="btn btn-danger"><h2>
                        Cerca Eventi</h2></button>

                </div>

            </div>


        </div>

    </div>


    <input type="hidden" class="form-control" name="user_id" value="<?php echo $_SESSION['user_id'] ?>"/>

</form>