<!DOCTYPE html>
<html lang="en">
<?
    try {
        //$lang = $this->scope->language->get_js_lang_pack();
        $body = $this->get_view();
        $less = $assets->less->compile();
        $js   = $assets->js->compile();
    } catch (Exception $ex) {
        $body = $this->scope->__wrapException($ex)->get_view();
    }
?>
    <head>
        <meta charset="utf-8" />

        <?if($this instanceof Oxygen_Controller){?>
        <?$current=$this->getCurrent()?>
        <title><?$current->put_title()?></title>
        <link rel="shortcut icon" href="<?=$current->getIconSource()?>"/>
        <?}?>

        <script src="<?=$this->scope->lib->url('js/oxygen.js')?>"></script>
        <?/*<script src="<?=$this->scope->lib->url('js/jquery-ui-1.8.20.custom.min.js')?>"></script>*/?>

        <meta name="description" content="overview &amp; stats" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="stylesheet" type="text/css" href="/install/bootstrap/css/bootstrap.css">
        <style>
            html, body {
                height: 100%;
            }
        </style>

        <script type="text/javascript">
            window.jQuery = window.oxygen.$;
            window.$ = window.oxygen.$;
        </script>

        <script src="/install/bootstrap/js/bootstrap.js"></script>
        
        <?=$this->put_stylesheets()?>
        <?=$this->put_javascripts()?>
    </head>

    <body>
        <?//=$lang?>
        <?=$body?>
        <div class="dialog-space" style="width:0px;height:0px;position:absolute;overflow:hidden"></div>
    </body>
</html>