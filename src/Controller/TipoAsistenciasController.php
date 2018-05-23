<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TipoAsistencias Controller
 *
 * @property \App\Model\Table\TipoAsistenciasTable $TipoAsistencias
 *
 * @method \App\Model\Entity\TipoAsistencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoAsistenciasController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $tipoAsistencias = $this->paginate($this->TipoAsistencias);

        $this->set(compact('tipoAsistencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Asistencia id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoAsistencia = $this->TipoAsistencias->get($id, [
            'contain' => ['Casos']
        ]);

        $this->set('tipoAsistencia', $tipoAsistencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoAsistencia = $this->TipoAsistencias->newEntity();
        if ($this->request->is('post')) {
            $tipoAsistencia = $this->TipoAsistencias->patchEntity($tipoAsistencia, $this->request->getData());
            if ($this->TipoAsistencias->save($tipoAsistencia)) {
                $this->Flash->success(__('The tipo asistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo asistencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoAsistencia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Asistencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoAsistencia = $this->TipoAsistencias->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoAsistencia = $this->TipoAsistencias->patchEntity($tipoAsistencia, $this->request->getData());
            if ($this->TipoAsistencias->save($tipoAsistencia)) {
                $this->Flash->success(__('The tipo asistencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo asistencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoAsistencia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Asistencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoAsistencia = $this->TipoAsistencias->get($id);
        if ($this->TipoAsistencias->delete($tipoAsistencia)) {
            $this->Flash->success(__('The tipo asistencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo asistencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
