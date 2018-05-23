<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Casos Controller
 *
 * @property \App\Model\Table\CasosTable $Casos
 *
 * @method \App\Model\Entity\Caso[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CasosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Usuarios', 'Empresas', 'TipoAsistencias']
        ];
        $casos = $this->paginate($this->Casos);

        $this->set(compact('casos'));
    }

    /**
     * View method
     *
     * @param string|null $id Caso id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $caso = $this->Casos->get($id, [
            'contain' => ['Usuarios', 'Empresas', 'TipoAsistencias']
        ]);

        $this->set('caso', $caso);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $caso = $this->Casos->newEntity();
        if ($this->request->is('post')) {
            $caso = $this->Casos->patchEntity($caso, $this->request->getData());
            if ($this->Casos->save($caso)) {
                $this->Flash->success(__('The caso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caso could not be saved. Please, try again.'));
        }
        $usuarios = $this->Casos->Usuarios->find('list', ['limit' => 200]);
        $empresas = $this->Casos->Empresas->find('list', ['limit' => 200]);
        $tipoAsistencias = $this->Casos->TipoAsistencias->find('list', ['limit' => 200]);
        $this->set(compact('caso', 'usuarios', 'empresas', 'tipoAsistencias'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Caso id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $caso = $this->Casos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $caso = $this->Casos->patchEntity($caso, $this->request->getData());
            if ($this->Casos->save($caso)) {
                $this->Flash->success(__('The caso has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The caso could not be saved. Please, try again.'));
        }
        $usuarios = $this->Casos->Usuarios->find('list', ['limit' => 200]);
        $empresas = $this->Casos->Empresas->find('list', ['limit' => 200]);
        $tipoAsistencias = $this->Casos->TipoAsistencias->find('list', ['limit' => 200]);
        $this->set(compact('caso', 'usuarios', 'empresas', 'tipoAsistencias'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Caso id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $caso = $this->Casos->get($id);
        if ($this->Casos->delete($caso)) {
            $this->Flash->success(__('The caso has been deleted.'));
        } else {
            $this->Flash->error(__('The caso could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
