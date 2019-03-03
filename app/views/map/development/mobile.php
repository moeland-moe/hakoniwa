<?php $this->islandInfo($island, $number, 1, true); // call as mobile mode ?>

<div class="MapCell MapWrap">
    <?php $this->islandMap($hako, $island, 1); // 島の地図、所有者モード?>
</div>

<div class="text-center plan">
    <form action="<?=$this_file?>" method="post" name="InputPlan" id="input_plan">
        <input type="hidden" name="mode" value="command">
        <input type="hidden" name="ISLANDID" value="<?=$island['id']?>">
        <input type="hidden" name="PASSWORD" value="<?=$data['defaultPassword']?>">


        <div class="commands" id="in_cmd">
            <?php
            $command = $island['command'];
            $commandMax = $init->commandMax;
            for ($i = 0; $i < $commandMax; $i++) {
                $this->tempCommand($i, $command[$i], $hako);
            }
            ?>
        </div>
        <select name="COMMAND">
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

                println('<option value="', $kind, '" ', $s, '>', $init->comName[$kind], ' (', $cost, ')</option>');
            }
            ?>
        </select><br>
        位置：
        <select name="NUMBER">
            <?php for ($i = 0; $i < $init->commandMax; $i++):?>
                <option value="<?=$i?>"><?=$i+1?></option>";
            <?php endfor;?>
        </select>

        <b>動作</b><br>

        <a href="javascript:void(0)" onclick="cmd_set('delete')">削除</a>
        <input type="hidden" name="COMMANDMODE" value="insert" id="cmdmode">

        <b>座標</b>(
        <select name="POINTX">
        <?php
        for ($i = 0; $i < $init->islandSize; $i++) {
            if (isset($data['defaultX'])) {
                if ($i == $data['defaultX']) {
                    echo "<option value=\"{$i}\" selected>{$i}</option>\n";
                } else {
                    echo "<option value=\"{$i}\">{$i}</option>\n";
                }
            } else {
                echo "<option value=\"{$i}\">{$i}</option>\n";
            }
        }
        ?>
        </select>,
        <select name="POINTY">
        <?php
        for ($i = 0; $i < $init->islandSize; $i++) {
            if (isset($data['defaultY'])) {
                if ($i == $data['defaultY']) {
                    echo "<option value=\"{$i}\" selected>{$i}</option>\n";
                } else {
                    echo "<option value=\"{$i}\">{$i}</option>\n";
                }
            } else {
                echo "<option value=\"{$i}\">{$i}</option>\n";
            }
        }
        ?>
        </select>)
        <a href="javascript:void(0)" onclick="openPop('target_confirm')">攻撃</a> <a href="javascript:void(0)" onclick="openPop('plan_confirm')">入力</a>



        <input type="hidden" name="DEVELOPEMODE" value="cgi">



        <div id="plan_confirm">
            <span id="selected-item"></span> 数量：
            <select name="AMOUNT">
                <?php
                for ($i = 0; $i < 100; $i++) {
                    echo "<option value=\"{$i}\">{$i}</option>\n";
                }
                ?>
            </select>
            <a href="javascript:void(0)" onclick="cmd_set('insert')">挿入</a>
            <a href="javascript:void(0)" onclick="cmd_set('write')">上書き</a>
        </div>

        <div id="target_confirm">
            <b>目標の島</b><br>
            <select name="TARGETID" onchange="settarget(this);" id="target_id">
                <?= strip_tags($hako->islandList, '<option>') ?>
            </select>

            <input type="button" value="目標捕捉" onClick="targetopen();">
            <p>ミサイル発射上限数[<b> <?=$island['fire']?> </b>]発</p>
            <div onclick="openFade('target_confirm');">キャンセルする</div>
        </div>

    </form>


</div>




        <div class="CommandCell">
        <?php
            $command = $island['command'];
            $commandMax = $init->commandMax;
            for ($i = 0; $i < $commandMax; $i++) {
                $this->tempCommand($i, $command[$i], $hako);
            }
        ?>
        </div>

<hr>

<div id="CommentBox">
    <h2>コメント更新</h2>
    <form action="<?=$this_file?>" method="post">
        <div class="row">
            <div class="col-xs-12">
                <div class="input-group">
                    <input type="text" name="MESSAGE" class="form-control" size="80" value="<?=$island['comment']?>" placeholder="コメントする">
                    <input type="hidden" name="PASSWORD" value="<?=$data['defaultPassword']?>">
                    <input type="hidden" name="mode" value="comment">
                    <input type="hidden" name="ISLANDID" value="<?=$island['id']?>">
                    <input type="hidden" name="DEVELOPEMODE" value="cgi">
                    <span class="input-group-btn">
                        <input type="submit" class="btn btn-primary" value="コメント更新">
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>

<iframe id="target_map" name="t_map">
</iframe>
<div id="target_ctl">


    目標座標：(<span id="tx">0</span>,<span id="ty">0</span>)<br>
    <select id="angriff_cmd">
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

        println('<option value="', $kind, '" ', $s, '>', $init->comName[$kind], ' (', $cost, ')</option>');
    }
    ?></select><br>
    　<a href="javascript:void(0)" onclick="angriff('target_map');">攻撃実行！</a> <a href="javascript:void(0)" onclick="targetclose();">キャンセル</a>
</div>


<span id="default_target" style="display: none;"><?=$defaultTarget?></span>
<script type="text/javascript" src="public/assets/js/devmap.js"></script>
