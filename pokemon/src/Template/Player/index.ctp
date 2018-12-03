<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player[]|\Cake\Collection\CollectionInterface $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li><?= $this->Html->link(__('新規登録'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="player index large-9 medium-8 columns content">
    <h3><?= __('対戦履歴') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('プレイヤー名') ?></th>
                <th scope="col"><?= $this->Paginator->sort('レート') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('pokemon1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pokemon2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pokemon3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo3') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pokemon4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo4') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pokemon5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo5') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pokemon6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('item6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('ability6') ?></th>
                <th scope="col"><?= $this->Paginator->sort('memo6') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('勝敗') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('playermemo') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('登録日時') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th scope="col" class="actions"><?= __('操作') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($player as $player): ?>
            <tr>
                <!-- <td><?= $this->Number->format($player->id) ?></td> -->
                <td><?= h($player->name) ?></td>
                <td><?= h($player->rate) ?></td>
                <!-- <td><?= h($player->pokemon1) ?></td>
                <td><?= h($player->item1) ?></td>
                <td><?= h($player->ability1) ?></td>
                <td><?= h($player->memo1) ?></td>
                <td><?= h($player->pokemon2) ?></td>
                <td><?= h($player->item2) ?></td>
                <td><?= h($player->ability2) ?></td>
                <td><?= h($player->memo2) ?></td>
                <td><?= h($player->pokemon3) ?></td>
                <td><?= h($player->item3) ?></td>
                <td><?= h($player->ability3) ?></td>
                <td><?= h($player->memo3) ?></td>
                <td><?= h($player->pokemon4) ?></td>
                <td><?= h($player->item4) ?></td>
                <td><?= h($player->ability4) ?></td>
                <td><?= h($player->memo4) ?></td>
                <td><?= h($player->pokemon5) ?></td>
                <td><?= h($player->item5) ?></td>
                <td><?= h($player->ability5) ?></td>
                <td><?= h($player->memo5) ?></td>
                <td><?= h($player->pokemon6) ?></td>
                <td><?= h($player->item6) ?></td>
                <td><?= h($player->ability6) ?></td>
                <td><?= h($player->memo6) ?></td> -->
                <td><?= h($player->winlose) ?></td>
                <!-- <td><?= h($player->playermemo) ?></td> -->
                <td><?= h($player->created) ?></td>
                <!-- <td><?= h($player->modified) ?></td>　-->
                <td class="actions">
                    <?= $this->Html->link(__('詳細'), ['action' => 'view', $player->id]) ?>
                    <?= $this->Html->link(__('編集'), ['action' => 'edit', $player->id]) ?>
                    <?= $this->Form->postLink(__('削除'), ['action' => 'delete', $player->id], ['confirm' => __('本当に削除しますか?', $player->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('先頭')) ?>
            <?= $this->Paginator->prev('< ' . __('前')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('次') . ' >') ?>
            <?= $this->Paginator->last(__('最後') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
