/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

function add_html_team_html(){
    var season  = $("#wiki_title_no");
    if(season.val()!=''){
        var str = get_nba_team_html(season.val());
        var content = $("#index").html();
        $("#html").append(str);
        season.val('');
    }else{
        alert('请输入赛季');
    }
}
function add_nba_team_palyer_html(){
    var season  = $("#html_add");
    if(season.val()!=''){
        var str = get_nba_team_palyer_html(season.val());
        var content = $("#index").html();
        $("#index").append(str);
        season.val('');
    }else{
        alert('请输入赛季');
    }
}

function get_nba_team_html(season){
    var str = '';
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\">赛季<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"text\"   id=\"nba_season"+season+"\" name=\"no\" value=\""+season+"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">投篮(场均)<\/font>出手<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_fire_averaging_goal_key"+season+"\" name=\"nba_team["+season+"][NbaFireSveragingGoal][WikiKey]\"  value=\"nba_fire_averaging_goal\" >";
    str+="                        <input type=\"hidden\" id=\"nba_fire_averaging_goal_sort"+season+"\" name=\"nba_team["+season+"][NbaFireSveragingGoal][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_fire_averaging_goal_value"+season+"\" name=\"nba_team["+season+"][NbaFireSveragingGoal][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">投篮(场均)<\/font>命中率<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_hit_averaging_goal_key"+season+"\" name=\"nba_team["+season+"][NbaHitSveragingGoal][WikiKey]\"  value=\"nba_hit_averaging_goal\" >";
    str+="                        <input type=\"hidden\" id=\"nba_hit_averaging_goal_sort"+season+"\" name=\"nba_team["+season+"][NbaHitSveragingGoal][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_hit_averaging_goal_value"+season+"\" name=\"nba_team["+season+"][NbaHitSveragingGoal][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">三分球(场均)<\/font>出手<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_fire_averaging_three_point_key"+season+"\" name=\"nba_team["+season+"][NbaFireAveragingThreePoint][WikiKey]\"  value=\"nba_fire_averaging_three_point\" >";
    str+="                        <input type=\"hidden\" id=\"nba_fire_averaging_three_point_sort"+season+"\" name=\"nba_team["+season+"][NbaFireAveragingThreePoint][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_fire_averaging_three_point_value"+season+"\" name=\"nba_team["+season+"][NbaFireAveragingThreePoint][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red"+season+"\">三分球(场均)<\/font>命中率<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_hit_averaging_three_point_key\" name=\"nba_team["+season+"][NbaHitAveragingThreePoint][WikiKey]\"  value=\"nba_hit_averaging_three_point\" >";
    str+="                        <input type=\"hidden\" id=\"nba_hit_averaging_three_point_sort\" name=\"nba_team["+season+"][NbaHitAveragingThreePoint][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_hit_averaging_three_point_value\" name=\"nba_team["+season+"][NbaHitAveragingThreePoint][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">罚球(场均)<\/font>出手<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_fire_averaging_free_throw_key"+season+"\" name=\"nba_team["+season+"][NbaFireAveragingFreeThrow][WikiKey]\"  value=\"nba_fire_averaging_free_throw\" >";
    str+="                        <input type=\"hidden\" id=\"nba_fire_averaging_free_throw_sort"+season+"\" name=\"nba_team["+season+"][NbaFireAveragingFreeThrow][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_fire_averaging_free_throw_value"+season+"\" name=\"nba_team["+season+"][NbaFireAveragingFreeThrow][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">罚球(场均)<\/font>命中率<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_hit_averaging_free_throw_key"+season+"\" name=\"nba_team["+season+"][NbaHitAveragingFreeThrow][WikiKey]\"  value=\"nba_hit_averaging_free_throw\" >";
    str+="                        <input type=\"hidden\" id=\"nba_hit_averaging_free_throw_sort"+season+"\" name=\"nba_team["+season+"][NbaHitAveragingFreeThrow][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_hit_averaging_free_throw_value"+season+"\" name=\"nba_team["+season+"][NbaHitAveragingFreeThrow][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">篮板(场均)<\/font>前场<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_rebounds_averaging_fore_court_key"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingForeCourt][WikiKey]\"  value=\"nba_rebounds_averaging_fore_court\" >";
    str+="                        <input type=\"hidden\" id=\"nba_rebounds_averaging_fore_court_sort"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingForeCourt][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_rebounds_averaging_fore_court_value"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingForeCourt][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">篮板(场均)<\/font>后场<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_rebounds_averaging_back_court_key"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingBackCourt][WikiKey]\"  value=\"nba_rebounds_averaging_back_court\" >";
    str+="                        <input type=\"hidden\" id=\"nba_rebounds_averaging_back_court_sort"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingBackCourt][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_rebounds_averaging_back_court_value"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingBackCourt][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">篮板(场均)<\/font>总<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_rebounds_averaging_all_court_key"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingAllCourt][WikiKey]\"  value=\"nba_rebounds_averaging_all_court\" >";
    str+="                        <input type=\"hidden\" id=\"nba_rebounds_averaging_all_court_sort"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingAllCourt][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_rebounds_averaging_all_court_value"+season+"\" name=\"nba_team["+season+"][NbaReboundsAveragingAllCourt][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">其他(场均)<\/font>助攻<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_assists_key"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingAssists][WikiKey]\"  value=\"nba_others_averaging_assists\" >";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_assists_sort"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingAssists][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_others_averaging_assists_value"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingAssists][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">其他(场均)<\/font>失误<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_turnovers_key"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingTurnovers][WikiKey]\"  value=\"nba_others_averaging_turnovers\" >";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_turnovers_sort"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingTurnovers][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_others_averaging_turnovers_value"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingTurnovers][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">其他(场均)<\/font>犯规<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_personal_fouls_key"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingPersonalFouls][WikiKey]\"  value=\"nba_others_averaging_personal_fouls\" >";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_personal_fouls_sort"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingPersonalFouls][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_others_averaging_personal_fouls_value"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingPersonalFouls][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    str+="                <tr>";
    str+="                    <td class=\"key\"><label for=\"nba_location\"><font color=\"red\">其他(场均)<\/font>得分<\/label><\/td>";
    str+="                    <td>";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_points_key"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingPoints][WikiKey]\"  value=\"nba_others_averaging_points\" >";
    str+="                        <input type=\"hidden\" id=\"nba_others_averaging_points_sort"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingPoints][Sort]\" value=\"0\">";
    str+="                        <input type=\"text\"   id=\"nba_others_averaging_points_value"+season+"\" name=\"nba_team["+season+"][NbaOthersAveragingPoints][WikiValue]\" value=\"\" size=\"70\">";
    str+="                    <\/td>";
    str+="                <\/tr>";
    return str;
}

function get_nba_team_palyer_html(sort){
    var str = '';
    str+="<tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"appeared\" style=\"color:red;\">赛季<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"text\"   id=\"nba_season"+sort+"\" name=\"no\" class=\"mceNoEditor\" value=\""+sort+"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"appeared\">出场<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_appeared_key"+sort+"\" name=\"nba_player["+sort+"][NbaSppeared][WikiKey]\"  value=\"nba_appeared\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_appeared_sort"+sort+"\" name=\"nba_player["+sort+"][NbaSppeared][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_appeared_value"+sort+"\" name=\"nba_player["+sort+"][NbaSppeared][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                       ";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"appeared\">首发<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_starting_key"+sort+"\" name=\"nba_player["+sort+"][NbaStarting][WikiKey]\"  value=\"nba_starting\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_starting_sort"+sort+"\" name=\"nba_player["+sort+"][NbaStarting][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_starting_value"+sort+"\" name=\"nba_player["+sort+"][NbaStarting][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"time\">时间<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_time_key"+sort+"\" name=\"nba_player["+sort+"][NbaTime][WikiKey]\"  value=\"nba_time\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_time_sort"+sort+"\" name=\"nba_player["+sort+"][NbaTime][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_time_value"+sort+"\" name=\"nba_player["+sort+"][NbaTime][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                       ";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"goal\">投篮<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_goal_key"+sort+"\" name=\"nba_player["+sort+"][NbaGoal][WikiKey]\"  value=\"nba_goal\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_goal_sort"+sort+"\" name=\"nba_player["+sort+"][NbaGoal][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_goal_value"+sort+"\" name=\"nba_player["+sort+"][NbaGoal][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                       ";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"goal\">三分<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_three_point_key"+sort+"\" name=\"nba_player["+sort+"][NbaThreePoint][WikiKey]\"  value=\"nba_three_point\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_three_point_sort"+sort+"\" name=\"nba_player["+sort+"][NbaThreePoint][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_three_point_value"+sort+"\" name=\"nba_player["+sort+"][NbaThreePoint][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"goal\">罚球<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_free_throw_key"+sort+"\" name=\"nba_player["+sort+"][NbaFreeThrow][WikiKey]\"  value=\"nba_free_throw\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_free_throw_sort"+sort+"\" name=\"nba_player["+sort+"][NbaFreeThrow][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_free_throw_value"+sort+"\" name=\"nba_player["+sort+"][NbaFreeThrow][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"front_rebounds\">前篮板<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_front_rebounds_key"+sort+"\" name=\"nba_player["+sort+"][NbaFrontRebounds][WikiKey]\"  value=\"nba_front_rebounds\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_front_rebounds_sort"+sort+"\" name=\"nba_player["+sort+"][NbaFrontRebounds][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_front_rebounds_value"+sort+"\" name=\"nba_player["+sort+"][NbaFrontRebounds][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"bak_rebounds\">后篮板<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_bak_rebounds_key"+sort+"\" name=\"nba_player["+sort+"][NbaBakRebounds][WikiKey]\"  value=\"nba_bak_rebounds\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_bak_rebounds_sort"+sort+"\" name=\"nba_player["+sort+"][NbaBakRebounds][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_bak_rebounds_value"+sort+"\" name=\"nba_player["+sort+"][NbaBakRebounds][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"all_rebounds\">总篮板<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_all_rebounds_key"+sort+"\" name=\"nba_player["+sort+"][NbaAllRebounds][WikiKey]\"  value=\"nba_all_rebounds\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_all_rebounds_sort"+sort+"\" name=\"nba_player["+sort+"][NbaAllRebounds][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_all_rebounds_value"+sort+"\" name=\"nba_player["+sort+"][NbaAllRebounds][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"assists\">助攻<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_assists_key"+sort+"\" name=\"nba_player["+sort+"][NbaAssists][WikiKey]\"  value=\"nba_assists\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_assists_sort"+sort+"\" name=\"nba_player["+sort+"][NbaAssists][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_assists_value"+sort+"\" name=\"nba_player["+sort+"][NbaAssists][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"steals\">抢断<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_steals_key"+sort+"\" name=\"nba_player["+sort+"][NbaSteals][WikiKey]\"  value=\"nba_steals\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_steals_sort"+sort+"\" name=\"nba_player["+sort+"][NbaSteals][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_steals_value"+sort+"\" name=\"nba_player["+sort+"][NbaSteals][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"steals\">盖帽<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_blocked_key"+sort+"\" name=\"nba_player["+sort+"][NbaBlocked][WikiKey]\"  value=\"nba_blocked\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_blocked_sort"+sort+"\" name=\"nba_player["+sort+"][NbaBlocked][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_blocked_value"+sort+"\" name=\"nba_player["+sort+"][NbaBlocked][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"steals\">失误<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_turnovers_key"+sort+"\" name=\"nba_player["+sort+"][NbaTurnovers][WikiKey]\"  value=\"nba_turnovers\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_turnovers_sort"+sort+"\" name=\"nba_player["+sort+"][NbaTurnovers][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_turnovers_value"+sort+"\" name=\"nba_player["+sort+"][NbaTurnovers][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"nba_personal_fouls\">犯规<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_personal_fouls_key"+sort+"\" name=\"nba_player["+sort+"][NbaPersonalFouls][WikiKey]\"  value=\"nba_personal_fouls\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_personal_fouls_sort"+sort+"\" name=\"nba_player["+sort+"][NbaPersonalFouls][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_personal_fouls_value"+sort+"\" name=\"nba_player["+sort+"][NbaPersonalFouls][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="                        <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"nba_points\">得分<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_points_key"+sort+"\" name=\"nba_player["+sort+"][NbaPoints][WikiKey]\"  value=\"nba_points\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_points_sort"+sort+"\" name=\"nba_player["+sort+"][NbaPoints][Sort]\" value=\"0\">";
    str+="                                    <input type=\"text\"   id=\"nba_points_value"+sort+"\" name=\"nba_player["+sort+"][NbaPoints][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    str+="";
    str+="                       <tr>";
    str+="                            <td width=\"40%\" class=\"paramlist_key\"><span class=\"editlinktip\"><label for=\"nba_team\">球队<\/label><\/span><\/td>";
    str+="                            <td class=\"paramlist_value\">";
    str+="                                    <input type=\"hidden\" id=\"nba_team_key"+sort+"\" name=\"nba_player["+sort+"][NbaTeam][WikiKey]\"  value=\"nba_team\" >";
    str+="                                    <input type=\"hidden\" id=\"nba_team_sort"+sort+"\" name=\"nba_player["+sort+"][NbaTeam][Sort]\" value=\"0\">";
    str+="                                    <input type=\"hidden\" id=\"nba_team_value"+sort+"\" name=\"nba_player["+sort+"][NbaTeam][WikiValue]\" class=\"mceNoEditor\" value=\"\" size=\"70\"\/>";
    str+="                                    <input type=\"text\"   id=\"nba_team_value_show"+sort+"\" name=\"hide\" class=\"mceNoEditor\"  size=\"70\" onblur=\"get_team_id_by_title()\"\/>";
    str+="                            <\/td>";
    str+="                       <\/tr>";
    return str;
}

function get_fb_international_right_html(id)
{
    var str = '';
    str+="                       <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">赛季战绩:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\""+id+"\" name=\"no\" id=\"value_"+id+"_home_no\" disabled=\"true\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" style=\"color: red;\" class=\"paramlist_key\">(主场) 已胜:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][win_all]\" id=\"value_"+id+"_home_win_all\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(主场) 胜:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][win]\" id=\"value_"+id+"_home_win\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(主场) 平:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][deuce]\" id=\"value_"+id+"_home_deuce\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(主场) 负:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][lose]\" id=\"value_"+id+"_home_lose\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(主场) 进球:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][ball_get]\" id=\"value_"+id+"_home_ball_get\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(主场) 失球:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][ball_lose]\" id=\"value_"+id+"_home_ball_lose\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(主场) 近五轮战绩(1胜,0平,-1负)<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][home][results]\" id=\"value_"+id+"_home_results\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" style=\"color: red;\" class=\"paramlist_key\">(客场) 已胜:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][win_all]\" id=\"value_"+id+"_road_win_all\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(客场) 胜:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][win]\" id=\"value_"+id+"_road_win\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(客场) 平:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][deuce]\" id=\"value_"+id+"_road_deuce\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(客场) 负:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][lose]\" id=\"value_"+id+"_road_lose\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(客场) 进球:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][ball_get]\" id=\"value_"+id+"_road_ball_get\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(客场) 失球:<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][ball_lose]\" id=\"value_"+id+"_road_ball_lose\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    str+="                        <tr class=\"fb_international"+id+"\">";
    str+="                            <td width=\"40%\" class=\"paramlist_key\">(客场) 近五轮战绩(1胜,0平,-1负)<\/td>";
    str+="                            <td width=\"70%\" class=\"paramlist_value\">";
    str+="                                    <input type=\"text\" size=\"50\" value=\"\" name=\"fb_international["+id+"][road][results]\" id=\"value_"+id+"_road_results\">";
    str+="                            <\/td>";
    str+="                        <\/tr>";
    return str;
}

function fb_international_right_add(){
    var id  = $("#value_id_no").val();
    if(id != ''){
        var html    = get_fb_international_right_html(id);
        var index   = $("#index");
        var content = index.html();
        index.html(html+content);
    }
}