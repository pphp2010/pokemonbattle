<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('対戦履歴'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="player form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('対戦履歴登録') ?></legend>
        <?php
            echo $this->Form->control('name',["label" => "プレーヤー名"]);
            echo $this->Form->control('rate',["label" => "レート"]);
            echo $this->Form->control('pokemon1',["label" => "ポケモン"]);
            echo $this->Form->control('item1',["label" => "持ち物"]);
            echo $this->Form->control('ability1',["label" => "特性"]);
            echo $this->Form->control('memo1',["label" => "型情報メモ"]);
            echo $this->Form->control('pokemon2',["label" => "ポケモン"]);
            echo $this->Form->control('item2',["label" => "持ち物"]);
            echo $this->Form->control('ability2',["label" => "特性"]);
            echo $this->Form->control('memo2',["label" => "型情報メモ"]);
            echo $this->Form->control('pokemon3',["label" => "ポケモン"]);
            echo $this->Form->control('item3',["label" => "持ち物"]);
            echo $this->Form->control('ability3',["label" => "特性"]);
            echo $this->Form->control('memo3',["label" => "型情報メモ"]);
            echo $this->Form->control('pokemon4',["label" => "ポケモン"]);
            echo $this->Form->control('item4',["label" => "持ち物"]);
            echo $this->Form->control('ability4',["label" => "特性"]);
            echo $this->Form->control('memo4',["label" => "型情報メモ"]);
            echo $this->Form->control('pokemon5',["label" => "ポケモン"]);
            echo $this->Form->control('item5',["label" => "持ち物"]);
            echo $this->Form->control('ability5',["label" => "特性"]);
            echo $this->Form->control('memo5',["label" => "型情報メモ"]);
            echo $this->Form->control('pokemon6',["label" => "ポケモン"]);
            echo $this->Form->control('item6',["label" => "持ち物"]);
            echo $this->Form->control('ability6',["label" => "特性"]);
            echo $this->Form->control('memo6',["label" => "型情報メモ"]);
            echo $this->Form->control('winlose',["label" => "勝敗"]);
            echo $this->Form->control('playermemo',["label" => "対戦相手メモ"]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('登録')) ?>
    <?= $this->Form->end() ?>
</div>
