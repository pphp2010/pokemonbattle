<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('履歴の削除'),
                ['action' => 'delete', $player->id],
                ['confirm' => __('本当に削除しますか?', $player->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('対戦履歴一覧'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="player form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
        <legend><?= __('対戦履歴編集') ?></legend>
        <?php
            echo $this->Form->control('プレーヤー名');
            echo $this->Form->control('レート');
            echo $this->Form->control('1匹目のポケモン');
            echo $this->Form->control('持ち物');
            echo $this->Form->control('特性');
            echo $this->Form->control('型情報メモ');
            echo $this->Form->control('2匹目のポケモン');
            echo $this->Form->control('持ち物');
            echo $this->Form->control('特性');
            echo $this->Form->control('型情報メモ');
            echo $this->Form->control('3匹目のポケモン');
            echo $this->Form->control('持ち物');
            echo $this->Form->control('特性');
            echo $this->Form->control('型情報メモ');
            echo $this->Form->control('4匹目のポケモン');
            echo $this->Form->control('持ち物');
            echo $this->Form->control('特性');
            echo $this->Form->control('型情報メモ');
            echo $this->Form->control('5匹目のポケモン');
            echo $this->Form->control('持ち物');
            echo $this->Form->control('特性');
            echo $this->Form->control('型情報メモ');
            echo $this->Form->control('6匹目のポケモン');
            echo $this->Form->control('持ち物');
            echo $this->Form->control('特性');
            echo $this->Form->control('型情報メモ');
            echo $this->Form->control('勝敗');
            echo $this->Form->control('プレーヤーメモ');
        ?>
    </fieldset>
    <?= $this->Form->button(__('編集')) ?>
    <?= $this->Form->end() ?>
</div>
