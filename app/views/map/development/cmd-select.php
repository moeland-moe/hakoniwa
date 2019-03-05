    <?php
    // コマンド
    for ($i = 0, $l = count($init->comList);  $i < $l; $i++) {
        $kind = $init->comList[$i];
        $cost = $init->comCost[$kind];
        $s = '';

        if ($cost == 0) {
            $cost = '無料';
        } elseif ($cost < 0) {
            $cost = - $cost;
            if ($kind == $init->comSellTree) {
                $cost .= $init->unitTree;
            } else {
                $cost .= $init->unitFood;
            }
        } else {
            $cost .= $init->unitMoney;
        }

        if (isset($data['defaultKind'])) {
            if ($kind == $data['defaultKind']) {
                $s = 'selected';
            }
        }

        println('<option class=' . $init->comType[$kind] . ' value="', $kind, '" ', $s, '>', $init->comName[$kind], ' (', $cost, ')</option>');
    }
    ?>
