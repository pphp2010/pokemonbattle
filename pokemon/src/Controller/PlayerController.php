<?php
namespace App\Controller;

use App\Controller\AppController;

class PlayerController extends AppController
{

    public function index()
    {
        $player = $this->paginate($this->Player);

        $this->set(compact('player'));
        $this->set('_serialize', ['player']);
    }

    public function view($id = null)
    {
        $player = $this->Player->get($id, [
            'contain' => []
        ]);

        $this->set('player', $player);
    }

    public function add()
    {
        $player = $this->Player->newEntity();
        if ($this->request->is('post')) {
            $player = $this->Player->patchEntity($player, $this->request->getData());
            if ($this->Player->save($player)) {
                $this->Flash->success(__('対戦履歴の保存が完了しました。'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('エラーが発生しました。'));
        }
        $this->set(compact('player'));
    }

    public function edit($id = null)
    {
        $player = $this->Player->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $player = $this->Player->patchEntity($player, $this->request->getData());
            if ($this->Player->save($player)) {
                $this->Flash->success(__('The player has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The player could not be saved. Please, try again.'));
        }
        $this->set(compact('player'));
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $player = $this->Player->get($id);
        if ($this->Player->delete($player)) {
            $this->Flash->success(__('The player has been deleted.'));
        } else {
            $this->Flash->error(__('The player could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }


}
