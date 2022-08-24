<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('test_method'))
{
    function show_alert($type = '', $msg= '')
    {
        $strSuccess = '<div class="alert alert-success a_success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> ##msg##</div>';
        $strError = '<div class="alert alert-danger a_danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a> ##msg##</div>';
        $strWarning = '<div class="alert alert-warning a_warning"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>##msg##</div>';

        if($type=="success"){
        	$msg= str_replace('##msg##', $msg, $strSuccess);
        }elseif($type=="error"){
        	$msg= str_replace('##msg##', $msg, $strError);
        }elseif($type=="warning"){
        	$msg= str_replace('##msg##', $msg, $strWarning);
        }
        echo $msg;
    }   
}




 if( ! function_exists('get_contact_template') )

{

    function get_contact_template()

    {

        $thisval = '<!DOCTYPE html>
<html>
<head>
  <div data-template-type="html" class="ui-sortable">
    <center>
      <table  cellpadding="0" cellspacing="0" align="center" width="100%" style="background-color:#F9F9F9;border:0;border-collapse:collapse;border-spacing:0;margin:0 auto;max-width:100%;width:100%;" class="">
        <tbody>
          <tr>
            <td align="center" style="text-align: left;padding: 17px">
              <table   cellpadding="0" cellspacing="0" align="center" class="table-700" style="background-color:#FFFFFF;border:0;border-collapse:collapse;border-spacing:0;margin:0 auto;max-width:700px;width:700px;">
                <tbody>
                  <tr>
                    <td align="center" style="text-align: left;padding: 17px">
                      <table cellpadding="0" cellspacing="0" align="center" width="100%" style="border:0;border-collapse:collapse;border-spacing:0;">
                        <tbody>
                          <tr>
                            <td data-bg="Hero BG" align="center" class="mo-px-25" bgcolor="#F5F5F5" background="##bg_img##" style="text-align: left;padding: 17px;background-color:#F5F5F5;background-position:center top;background-size:cover;background-repeat: no-repeat;">
                              <table cellspacing="0" cellpadding="0" align="center" class="table-640" style="border:0;border-collapse:collapse;border-spacing:0;margin:0 auto;max-width:500px;width:500px;">
                                <tbody>
                                  <tr>
                                    <td style="text-align: left;padding: 17px;font-size:80px;height:80px;line-height:80px;">&nbsp;</td>
                                  </tr>
                                  <tr>
                                    <td align="center" style="text-align: left;padding: 40px 0;">
                                      <table cellspacing="0" cellpadding="0" align="center" bgcolor="" class="table-540" style="border:0;border-collapse:collapse;border-spacing:0;margin:0 auto;max-width:540px;width:470px;">
                                        <tbody>
                                          <tr>
                                            <td align="center" class="mo-px-25" style="text-align: left;padding: 17px 0;">
                                              <table class="main-content" style="margin-top: 50px;border-collapse: collapse;width: 100%;margin-bottom: 100px;">
                                                <tr>
                                                  <th colspan="2" style="font-family: system-ui; text-align:left;">##message##</th>                                                  
                                                </tr>
                                                <tr>
                                                  <td colspan="2" style="background: #044f53;display: inline-block;padding: 10px;margin-top: 15px;"><a href="https://aleizba.com" style="text-decoration:none;color: #fff">Visit Us</a></td>
                                                </tr>
                                              </table>
                                            </td>
                                          </tr>
                                          <table cellspacing="0" cellpadding="0" align="center" bgcolor="">
                                          <tr>
                                            <td style="padding: 10px;"><img src="https://i.ibb.co/C91kbZS/tel.png" style="width: 20px;"></td>
                                            <td><a href="tel:+97-154-587-1570" style="color: black;text-decoration: none;">+97-154-587-1570</a></td>
                                          </tr>
                                          <tr>
                                            <td style="padding: 10px;"><img src="https://i.ibb.co/HVCSrvy/email.png" style="width: 20px;"></td>
                                            <td><a href="mailto:info@aleizba.com" style="color: black;text-decoration: none;">info@aleizba.com</a></td>
                                          </tr>
                                          <tr>
                                            <td style="padding: 10px;"><img src="https://i.ibb.co/pZzjQns/www.png" style="width: 20px;"></td>
                                            <td><a href="https://aleizba.com/" style="color: black;text-decoration: none;">aleizba.com</a></td>
                                          </tr>
                                           
                                          <tr>
                                            <td colspan="2" style="padding: 10px;"><br><br>Follow Us - </td>
                                          </tr>
                                        </table>


                                        <table cellspacing="0" cellpadding="0" align="left"  style="text-align:center;">
                                          
                                          <tr >
                                             <td style="padding: 10px;"><a href="https://www.facebook.com/aleizbahousing/"><img src="https://i.ibb.co/pXynvQs/facebook.png" style="width: 20px;"></a></td>
                                            <td style="padding: 10px;"><a href="https://www.instagram.com/aleizba_housing/"><img src="https://i.ibb.co/vV86DHd/instagram.png" style="width: 20px;"></a></td>
                                            <td style="padding: 10px;"><a href="https://twitter.com/aleizba_housing"><img src="https://i.ibb.co/JBCsvFW/twitter.png" style="width: 20px;"></a></td>
                                            <td style="padding: 10px;"><a href="https://ae.linkedin.com/company/aleizba"><img src="https://i.ibb.co/YQLTbrb/in.png" style="width: 20px;"></a></td>
                                             
                                            <td style="padding: 10px;"><a href="https://www.youtube.com/channel/UCXbJSKD_KZuXFb3pbSQ2kCw"><img src="https://i.ibb.co/d5kBvx1/youtube.png" style="width: 20px;"></a></td>                                            
                                          </tr>
                                        </table>
                                        </tbody>
                                      </table>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </td>
                          </tr>
                        </tbody>
                      </table>
                    </td>
                  </tr>
                </tbody>
              </table>
            </td>
          </tr>
        </tbody>
      </table>
    </center>
  </div>
  </body>
</html>';
        return $thisval;
    }

} 

?>