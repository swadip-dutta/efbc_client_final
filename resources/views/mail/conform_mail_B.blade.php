<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset==utf-8">
</head>

<body style="word-wrap: break-word; -webkit-nbsp-mode: s=pace; line-break: after-white-space;" class="3D">
    <div align="center">
        <table border="1" cellspacing="0" cellpadding="0" width="80%" style="width:443.297px;border:1pt solid windowtext">
            <tbody>
                <tr>
                    <td colspan="2" style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif;text-align:center">
                            <span id="m_3500189978075623348cid:1791f8d6999f6b934d71">
                                <img src="http://eastfuelconf.com/wp-content/uploads/2022/02/EFBC-Logo.jpeg" alt="Logo" width="300" height="130">
                            </span>
                        </div>
                    </td>
                </tr>

                @foreach($data as $ord)

                <tr>
                    <td colspan="2" style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif;text-align:center"><b>The following registration was processed<u></u><u></u></b></div>
                    </td>
                </tr>



                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Name:&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->first_name . ' ' . $ord->last_name; ?><u></u><u></u></div>
                    </td>
                </tr>



                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Badge :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->badge_name; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Email :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><a href="<?php echo 'mailto:' . $ord->email; ?>" target="_blank"><?php echo $ord->email; ?></a></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Secondary Email :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><a href="<?php echo 'mailto:' . $ord->second_email; ?>" target="_blank"><?php echo $ord->secondaryEmail; ?></a></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Organization :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->org_name; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Job title :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->job_title; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Address :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->addr_line1 . '<br>' . $ord->addr_line2; ?></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>City :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->city; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>State :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->state; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Zip :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->zip; ?><u></u><u></u></div>
                    </td>
                </tr>



                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Country :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->country; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Mobile :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->mobile; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Wednesday Activity :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->wedWelReception; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Golf Handicap: :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->golfHandicup; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Rental clubs :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->rentalClubs; ?><u></u><u></u></div>
                    </td>
                </tr>





                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Time :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->messagePreferredTime; ?><u></u><u></u></div>
                    </td>
                </tr>





                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Wednesday Welcome Reception :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->wedWelReception; ?><u></u><u></u></div>
                    </td>
                </tr>





                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Thursday Breakfast :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->thursdayBreakfast; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Thursday Luncheon :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->thursdayLuncheon; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Thursday Dinner :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->thursdayDinner; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Guest dinner tickets :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->spouseDinnerTicket; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Guest's name :&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->spouseFirstName . ' ' . $ord->spouseLastName; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Friday Breakfast:&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->fridayBreakfast; ?><u></u><u></u></div>
                    </td>
                </tr>




                <tr>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>Dietary Restrictions or Special Needs:&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><?php echo $ord->dietaryRestrictions; ?><u></u><u></u></div>
                    </td>
                </tr>


            @endforeach

                <tr>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><b>&nbsp;<u></u><u></u></b></div>
                    </td>
                    <td style="border:none;background-color:lightgrey;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif"><u></u><u></u></div>
                    </td>
                </tr>



                <tr>
                    <td colspan="2" style="border:none;padding:5pt">
                        <div style="margin:0in 0in 0.0001pt;font-size:12pt;font-family:Times New Roman,serif">Do not forget to make your hotel room reservations as soon as possible to ensure availability. Rooms are limited so book early. Click here to reserve your room online:&nbsp;<a href=" https://book.passkey.com/event/50291388/owner/70576/home " target="_blank" data-saferedirecturl="https://www.google.com/url?q=https://book.passkey.com/event/50291388/owner/70576/home&amp;source=gmail&amp;ust=1620325309608000&amp;usg=AFQjCNHE3g3sxcvJ2BuO97LEKlE0dIbTjw">https://book.passkey.com/event/50291388/owner/70576/home</a>&nbsp;<br><br>Disney Yacht &amp; Beach Club Resort&nbsp;<br>Phone Reservations: +1-407 939-4686&nbsp;<br><span class="il">Email</span>:&nbsp;<a href="mailto:WDW.Group.Reservations@DisneyWorld.com" target="_blank">WDW.Group.Reservations@<wbr>DisneyWorld.com</a>&nbsp;<br>Reservations will be accepted Monday to Friday from 8:30 AM to 6:00 PM, Saturday to Sunday 8:30 AM to 5:00 PM (EST, closed on holidays)&nbsp;<br><br>Attention Golfers: Please submit pairing requests to&nbsp;<a href="mailto:info@eastfuelconf.com" target="_blank">info@eastfuelconf.com</a><br><br>Attention Fishers: Please submit boat requests to&nbsp;<a href="mailto:info@eastfuelconf.com" target="_blank">info@eastfuelconf.com</a>&nbsp;<br>Thank you!&nbsp;<u></u><u></u></div>
                    </td>
                </tr>




            </tbody>
        </table>
    </div>
</body>

</html>