        <div class="team-section">
            <div class="my-container">
                <div class="table-2">
                    <div class="wpsm-table">
                        <div class="wpsm-table-row table-head">
                            <div class="wpsm-table-cell">
                                <p>image</p>
                            </div>
                            <div class="wpsm-table-cell">
                                <p> name</p>
                            </div>
                            <div class="wpsm-table-cell">
                                <p> designation</p>
                            </div>
                            <div class="wpsm-table-cell">
                                <p>Short Description</p>
                            </div>
                            <div class="wpsm-table-cell">
                                <p>Social Links</p>
                            </div>
                        </div>
<?php 
foreach($All_data as $single_data)
{
$cs_photo = $single_data['cs_photo'];
$cs_name = $single_data['cs_name'];
$cs_email = $single_data['cs_email'];
$cs_webname = $single_data['cs_webname'];
$cs_posi = $single_data['cs_posi'];
$cs_website = $single_data['cs_website'];
$cs_desc = $single_data['cs_desc'];

$cs_id = $single_data['cs_id'];
$crop_size = wp_get_attachment_image_src($cs_id,'wpsm_team_pro_small');
if($cs_id==0){
$img_url = $cs_photo;
}
else{
$img_url = $crop_size[0];
}

$fb_url=$single_data['fb_url'];
$tw_url = $single_data['tw_url'];
$yt_url = $single_data['yt_url'];
$gplus_url = $single_data['gplus_url'];
$lkd_url = $single_data['lkd_url'];
$tumb_url=$single_data['tumb_url'];
$ins_url = $single_data['ins_url'];
$pin_url = $single_data['pin_url'];
$sky_url = $single_data['sky_url'];
$red_url = $single_data['red_url'];
$vmo_url=$single_data['vmo_url'];
$be_url = $single_data['be_url'];
$drib_url = $single_data['drib_url'];
$flic_url = $single_data['flic_url'];
$whastapp_url = $single_data['whastapp_url'];
$snap_url=$single_data['snap_url'];
$tele_url = $single_data['tele_url'];
$wechat_url = $single_data['wechat_url'];
$imo_url = $single_data['imo_url'];
$baidoo_url = $single_data['baidoo_url'];
               
$grid_clear_both="";
if($templates_presets=="grid"){$grid_clear_both= "<div style='clear:both'></div>";}
?>
<div class="wpsm-table-row">
                            <div class="wpsm-table-cell">
    <?php if ($tm_display_image == "yes")
        { 
        ?>                                
                                <div class="wpsm-img-holder">
                                   <img src="<?php echo $img_url;?>" alt="team">
                                </div>
   <?php
        }
        ?>
                            </div>
                            <div class="wpsm-table-cell table-name">
                                        <?php if ($tm_display_name == "yes")
            {
            ?>
                                <div class="wpsm-cell-inner">
                                   <?php echo $cs_name;?>
                                </div>
                                   <?php
        }
        ?>
                            </div>
                            <div class="wpsm-table-cell table-designation">
                                         <?php if ($tm_display_position == "yes")
         { ?>
                                <div class="wpsm-cell-inner">
                                   <?php echo $cs_posi;?>
                                </div>
                                <?php
        }
        ?>
                            </div>
                            <div class="wpsm-table-cell table-description">
                                 <?php if ($tm_display_content == "yes")
         { ?>
                                <div class="wpsm-cell-inner">
                                    <p>

                                        <?php echo $cs_desc; ?> </p>
                                </div>
                                 <?php
            } ?>
                            </div>
                            <div class="wpsm-table-cell">
                                <?php if ($tm_display_rating == "yes")
                { ?>
                    <ul class="wpsm-social-icons">
                     <?php
                      //FB LINK
                        if(($fb_url=="") || ($fb_url=="#")) {} else{?>
                        <li>
                         <a href="<?php echo $fb_url;?>" <?php if($tm_rd_link=="yes")
                         {?> target="_blank"<?php }?>>
                        <span class="fa fa-facebook"></span>
                        </a>
                        </li>
                    <?php
                    }
                     ?>

                    <?php
                    //tWITTER LINK
                        if(($tw_url=="") || ($tw_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $tw_url;?>" <?php if($tm_rd_link=="yes")
                         {?> target="_blank"<?php }?>>
                        <span class="fa fa-twitter"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
        
                    <?php
                    //YOUTUBE LINK
                        if(($yt_url=="") || ($yt_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $yt_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-youtube"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
            
                    <?php
                    //G+ LINK
                        if(($gplus_url=="") || ($gplus_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $gplus_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-google"></span>
                        </a>
                        </li>
                    <?php
                    }
                    ?>
       
                    <?php
                    //Linked LINK
                        if(($lkd_url=="") || ($lkd_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $lkd_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-linkedin"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>
         
                    <?php
                    //Tumbler LINK
                        if(($tumb_url=="") || ($tumb_url=="#")) {} else{?>
                        <li>
                        <a href="<?php echo $tumb_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-tumblr"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>  
                
                    <?php
                    //Instagram LINK
                        if(($ins_url=="") || ($ins_url=="#")) {} else{?>
                        <li>
                         <a href="<?php echo $ins_url;?>" <?php if($tm_rd_link=="yes")
                        {?> target="_blank"<?php }?>>
                        <span class="fa fa-instagram"></span>
                        </a>
                        </li>
                    <?php
                     }
                    ?>  
        
                <?php
                //Pin LINK
                    if(($pin_url=="") || ($pin_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $pin_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-pinterest-p"></span>
                    </a>
                    </li>
                <?php
                }
                ?> 
        
                <?php
                //Skype LINK
                    if(($sky_url=="") || ($sky_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $sky_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-skype"></span>
                    </a>
                    </li>
                <?php
                }
                ?>

                <?php
                //Reddit LINK
                    if(($red_url=="") || ($red_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $red_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-reddit-alien"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Vmo LINK
                    if(($vmo_url=="") || ($vmo_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $vmo_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-vimeo"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Behance LINK
                    if(($be_url=="") || ($be_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $be_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-behance"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
                
                <?php
                //Dribble LINK
                    if(($drib_url=="") || ($drib_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $drib_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-dribbble"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
         
                <?php
                //Flickr LINK
                    if(($flic_url=="") || ($flic_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $flic_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-flickr"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Whatsapp LINK
                    if(($whastapp_url=="") || ($whastapp_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $whastapp_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-whatsapp"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                //Snapchat LINK
                    if(($snap_url=="") || ($snap_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $snap_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-snapchat-ghost"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        
                <?php
                 //Telegrame LINK
                    if(($tele_url=="") || ($tele_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $tele_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-telegram"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
       
                 <?php
                //Wechat LINK
                     if(($wechat_url=="") || ($wechat_url=="#")) {} else{?>
                    <li>
                     <a href="<?php echo $wechat_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-wechat"></span>
                    </a>
                    </li>
                <?php
                 }
                 ?>
        
                <?php
                //VK LINK
                     if(($imo_url=="") || ($imo_url=="#")) {} else{?>
                     <li>
                     <a href="<?php echo $imo_url;?>" <?php if($tm_rd_link=="yes")
                     {?> target="_blank"<?php }?>>
                     <span class="fa fa-vk"></span>
                     </a>
                     </li>
                <?php
                 }
                ?>
         
                <?php
                //Baidoo LINK
                    if(($baidoo_url=="") || ($baidoo_url=="#")) {} else{?>
                    <li>
                    <a href="<?php echo $baidoo_url;?>" <?php if($tm_rd_link=="yes")
                    {?> target="_blank"<?php }?>>
                    <span class="fa fa-stack-overflow"></span>
                    </a>
                    </li>
                <?php
                 }
                ?>
        </ul>
        <?php
          }
        ?>
                            </div>
                        </div>
<?php if($i%$cnrow==0)  
echo $grid_clear_both;
$i++;

}

?>
                    </div>
                </div>
            </div>
        </div>