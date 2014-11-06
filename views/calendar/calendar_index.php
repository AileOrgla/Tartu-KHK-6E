<div class="row">
    <div class="col-md-3 hidden-sm" style="background-color: rgba(0, 136, 203, 0.74902);">
        <div class="col-md-1"></div>
        <div class="col-md-10">
            <h2>Kalender</h2>

            <p>Tulevased sündmused.</p>
        </div>
        <div class="col-md-1"></div>
    </div>
    <div class="col-md-9">
        <?foreach( $posts as $post ):?>
        <div class="span8">
            <h3>
                <?=$post['subject']?>
            </h3>
            <h4>
                <?=$post['date']?>
            </h4>
            <p>
                <?=$post['text']?>
            </p>
            <div>
                <br/>
                <?endforeach?>
    </div>
</div>

