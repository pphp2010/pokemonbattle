<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('新規ユーザ登録') ?></legend>
        <?= $this->Form->control('username') ?>
        <?= $this->Form->control('password') ?>
        <?= $this->Form->control('role', [
            'options' => ['admin' => 'Admin', 'author' => 'Author']
        ]) ?>
   </fieldset>
    <?= $this->Html->link(__('ログイン'), ['action' => 'login']) ?>
    <?= $this->Form->button(__('登録')) ?>
    <?= $this->Form->end() ?>
</div>
