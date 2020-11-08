<?php

namespace Repositories\Estudiante;

use Repositories\BasePersistencia\IBasePersistencia;

interface IEstudiantePost extends IBasePersistencia{

    public function getInfoToEdit($id);

    public function getIinfoFilter(array $request);
}