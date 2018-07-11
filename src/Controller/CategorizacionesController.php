<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Categorizaciones Controller
 *
 * @property \App\Model\Table\CategorizacionesTable $Categorizaciones
 *
 * @method \App\Model\Entity\Categorizacion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class CategorizacionesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $categorizaciones = $this->paginate($this->Categorizaciones);

        $this->set(compact('categorizaciones'));
    }

    /**
     * View method
     *
     * @param string|null $id Categorizacion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $categorizacion = $this->Categorizaciones->get($id, [
            'contain' => []
        ]);

        $this->set('categorizacion', $categorizacion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $categorizacion = $this->Categorizaciones->newEntity();
        if ($this->request->is('post')) {
            $categorizacion = $this->Categorizaciones->patchEntity($categorizacion, $this->request->getData());
            if ($this->Categorizaciones->save($categorizacion)) {
                $this->Flash->success(__('The categorizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorizacion could not be saved.Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('categorizacion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Categorizacion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $categorizacion = $this->Categorizaciones->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $categorizacion = $this->Categorizaciones->patchEntity($categorizacion, $this->request->getData());
            if ($this->Categorizaciones->save($categorizacion)) {
                $this->Flash->success(__('The categorizacion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The categorizacion could not be saved.Por favor, inténtelo de nuevo.'));
        }
        $this->set(compact('categorizacion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Categorizacion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $categorizacion = $this->Categorizaciones->get($id);
        if ($this->Categorizaciones->delete($categorizacion)) {
            $this->Flash->success(__('The categorizacion has been deleted.'));
        } else {
            $this->Flash->error(__('The categorizacion could not be deleted.Por favor, inténtelo de nuevo.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
