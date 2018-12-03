<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('履歴の編集'), ['action' => 'edit', $player->id]) ?> </li>
        <li><?= $this->Form->postLink(__('履歴の削除'), ['action' => 'delete', $player->id], ['confirm' => __('本当に削除しますか？', $player->id)]) ?> </li>
        <li><?= $this->Html->link(__('対戦履歴一覧'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('新規登録'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="player view large-9 medium-8 columns content">
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('プレーヤー名') ?></th>
            <td><?= h($player->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('レート') ?></th>
            <td><?= h($player->rate) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('1匹目のポケモン') ?></th>
            <td><?= h($player->pokemon1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('持ち物') ?></th>
            <td><?= h($player->item1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('特性') ?></th>
            <td><?= h($player->ability1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('型情報メモ') ?></th>
            <td><?= h($player->memo1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('2匹目のポケモン') ?></th>
            <td><?= h($player->pokemon2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('持ち物') ?></th>
            <td><?= h($player->item2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('特性') ?></th>
            <td><?= h($player->ability2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('型情報メモ') ?></th>
            <td><?= h($player->memo2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('3匹目のポケモン') ?></th>
            <td><?= h($player->pokemon3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('持ち物') ?></th>
            <td><?= h($player->item3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('特性') ?></th>
            <td><?= h($player->ability3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('型情報メモ') ?></th>
            <td><?= h($player->memo3) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('4匹目のポケモン') ?></th>
            <td><?= h($player->pokemon4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('持ち物') ?></th>
            <td><?= h($player->item4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('特性') ?></th>
            <td><?= h($player->ability4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('型情報メモ') ?></th>
            <td><?= h($player->memo4) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('5匹目のポケモン') ?></th>
            <td><?= h($player->pokemon5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('持ち物') ?></th>
            <td><?= h($player->item5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('特性') ?></th>
            <td><?= h($player->ability5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('型情報メモ') ?></th>
            <td><?= h($player->memo5) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('6匹目のポケモン') ?></th>
            <td><?= h($player->pokemon6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('持ち物') ?></th>
            <td><?= h($player->item6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('特性') ?></th>
            <td><?= h($player->ability6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('型情報メモ') ?></th>
            <td><?= h($player->memo6) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('勝敗') ?></th>
            <td><?= h($player->winlose) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('プレーヤーメモ') ?></th>
            <td><?= h($player->playermemo) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('登録日時') ?></th>
            <td><?= h($player->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('編集日時') ?></th>
            <td><?= h($player->modified) ?></td>
        </tr>
    </table>
</div>
