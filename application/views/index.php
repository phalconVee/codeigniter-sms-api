<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>eBulkSMS Send SMS JSON API</title>
    </head>
 
    <body>
        <h2 style="text-align: center">Phalcon Vee eBulk SMS Integration for Codeigniter</h2>

        <div style="border: 1px solid #333; padding: 5px 10px; width: 40%; margin: 0 auto">

        <form id="form1" name="form1" method="post" action="<?=current_url();?>">

                <?php if(!empty($notice)) { ?>

                <p style="border: 1px dotted #333; background: #33ff33; padding: 5px;"><?=$notice?></p>

                <?php } ?>
            
            
            <p>
                <label>Sender name:
                    <input name="sender_name" type="text" id="name" value="Integration" />
                </label>
            </p>
            <p>
                <label>Recipients
                    <textarea name="telephone" id="telephone" cols="45" rows="2"></textarea>
                </label>
            </p>
            <p>
                <label>Message
                    <textarea name="message" id="message" cols="45" rows="5"></textarea>
                </label>
            </p>
            <p>
                <label>
                    <input type="submit" name="button" id="button" value="Submit" />
                </label>
                <label>
                    <input type="reset" name="button2" id="button2" value="Reset" />
                </label>
            </p>
        </form>
        </div>
    </body>
</html>