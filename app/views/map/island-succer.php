<div class="table-responsive">
    <table class="table table-bordered table-condensed">
        <thead>
            <tr>
                <th class="TitleCell head">総合得点</th>
                <th class="TitleCell head">成績</th>
                <th class="TitleCell head">攻撃力</th>
                <th class="TitleCell head">守備力</th>
                <th class="TitleCell head">得点</th>
                <th class="TitleCell head">失点</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="InfoCell"><?=$island['team']?></td>
                <td class="InfoCell"><?=$island['shiai']?>戦<?=$island['kachi']?>勝<?=$island['make']?>敗<?=$island['hikiwake']?>分</td>
                <td class="InfoCell"><?=$island['kougeki']?></td>
                <td class="InfoCell"><?=$island['bougyo']?></td>
                <td class="InfoCell"><?=$island['tokuten']?></td>
                <td class="InfoCell"><?=$island['shitten']?></td>
            </tr>
        </tbody>
    </table>
</div>
