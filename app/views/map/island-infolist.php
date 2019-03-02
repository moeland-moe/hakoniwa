<div class="infolist_mob">
<?php for($idx = $start; $idx < $sentinel; $idx++){ ?>
    <div class="mob_head"><b>†<?=$j[$idx] ?> </b>位</div>
    <div class="mod_body isName2_wrap"><a href="<?=$this_file ?>?Sight=<?=$id?>"><?=$name[$idx] ?></a><?=$keep[$idx] ?><?=$startDsp[$idx] ?></div>
    <div class="mod_body"><b>得点</b>：<?=$point[$idx] ?>　<b><?=$init->namePopulation ?></b>：<?=$pop[$idx] ?>　<b><?=$init->nameFunds ?></b> <?=$lots[$idx] ?>：<?=$money[$idx] ?>　<b><?=$init->nameFood ?></b>：<?=$food[$idx] ?></div>

<?php } ?>
</div>
<div class="table-responsive infolist">
    <table class="table table-bordered table-condensed">
<?php for($idx = $start; $idx < $sentinel; $idx++){ ?>
        <tr>
            <th class="TitleCell head"><?=$init->nameRank ?></th>
            <th class="TitleCell head"><?=$init->nameSuffix ?></th>
            <th class="TitleCell head">得点</th>
            <th class="TitleCell head"><?=$init->namePopulation ?></th>
            <th class="TitleCell head"><?=$init->nameArea ?></th>
            <th class="TitleCell head"><?=$init->nameWeather ?></th>
            <th class="TitleCell head"><?=$init->nameFunds ?> <?=$lots[$idx] ?></th>
            <th class="TitleCell head"><?=$init->nameFood ?></th>
            <th class="TitleCell head"><?=$init->nameUnemploymentRate ?></th>
        </tr>
        <tr>
            <th class="NumberCell number" rowspan=5><?=$j[$idx] ?></th>
            <td class="NameCell" rowspan=4>
                <h3><a href="<?=$this_file ?>?Sight=<?=$id?>"><?=$name[$idx] ?></a><?=$keep[$idx] ?><?=$startDsp[$idx] ?></h3>
                <div><?=$monster[$idx] ?> <?=$soccer[$idx] ?></div>
                <div><?=$prize[$idx] ?> <?=$viking[$idx] ?></div>
                <div><?=$zins[$idx] ?></div>
            </td>
            <td class="InfoCell"><?=$point[$idx] ?></td>
            <td class="InfoCell"><?=$pop[$idx] ?></td>
            <td class="InfoCell"><?=$area[$idx] ?></td>
            <td class="TenkiCell"><?=$sora[$idx] ?></td>
            <td class="InfoCell"><?=$money[$idx] ?></td>
            <td class="InfoCell"><?=$food[$idx] ?></td>
            <td class="InfoCell"><?=$unemployed[$idx] ?></td>
        </tr>
        <tr>
            <th class="TitleCell head"><?=$init->nameFarmSize ?></th>
            <th class="TitleCell head"><?=$init->nameFactoryScale ?></th>
            <th class="TitleCell head"><?=$init->nameCommercialScale ?></th>
            <th class="TitleCell head"><?=$init->nameMineScale ?></th>
            <th class="TitleCell head"><?=$init->namePowerPlantScale ?></th>
            <th class="TitleCell head"><?=$init->namePowerSupplyRate ?></th>
            <th class="TitleCell head"><?=$init->nameSatellite ?></th>
        </tr>
        <tr>
            <td class="InfoCell"><?=$farm[$idx] ?></td>
            <td class="InfoCell"><?=$factory[$idx] ?></td>
            <td class="InfoCell"><?=$commerce[$idx] ?></td>
            <td class="InfoCell"><?=$mountain[$idx] ?></td>
            <td class="InfoCell"><?=$hatuden[$idx] ?></td>
            <td class="InfoCell"><?=$ene[$idx] ?></td>
            <td class="ItemCell"><?=$eiseis[$idx] ?></td>
        </tr>
        <tr>
            <th class="TitleCell head">取得アイテム</th>
            <td class="ItemCell" colspan=6><?=$items ?></td>
        </tr>
        <tr>
            <td class="NameCell"><small>前ターン比： <?=$poin[$idx] ?> / <?=$peop[$idx] ?> / <?=$okane[$idx] ?> / <?=$gohan[$idx] ?></small></td>
            <td class="CommentCell" colspan=7><span class="head"><?=$owner[$idx] ?>：</span> <?=$comment[$idx] ?></td>
        </tr>
<?php } ?>
    </table>
</div>
