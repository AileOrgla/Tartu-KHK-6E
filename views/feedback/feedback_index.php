<div class="row">
    <?= $mail_message?>
    <div class="col-md-3 hidden-sm" style="background-color: rgba(0, 136, 203, 0.74902);">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Tagasiside</h2>

            <p>Saada õpilasesindusele oma arvamused ja mõtted.</p>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="col-md-9">
        <div class="col-md-4">
            <h3>Saada tagasisidet</h3>
                <form class="form-inline" method="post" role="form" action="feedback/send_mail">
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Nimi *" name="name"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="E-mail *" name="email"/>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="text" placeholder="Kirjuta oma sõnum *" name="message"/>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-default" type="submit">Saada</button>
                    </div>
                </form>
        </div>
    </div>
</div>