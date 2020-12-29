<?php

namespace App\Http\Controllers;

use App\DataTables\ClassRepresentativeDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateClassRepresentativeRequest;
use App\Http\Requests\UpdateClassRepresentativeRequest;
use App\Repositories\ClassRepresentativeRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ClassRepresentativeController extends AppBaseController
{
    /** @var  ClassRepresentativeRepository */
    private $classRepresentativeRepository;

    public function __construct(ClassRepresentativeRepository $classRepresentativeRepo)
    {
        $this->classRepresentativeRepository = $classRepresentativeRepo;
    }

    /**
     * Display a listing of the ClassRepresentative.
     *
     * @param ClassRepresentativeDataTable $classRepresentativeDataTable
     * @return Response
     */
    public function index(ClassRepresentativeDataTable $classRepresentativeDataTable)
    {
        return $classRepresentativeDataTable->render('class_representatives.index');
    }

    /**
     * Show the form for creating a new ClassRepresentative.
     *
     * @return Response
     */
    public function create()
    {
        return view('class_representatives.create');
    }

    /**
     * Store a newly created ClassRepresentative in storage.
     *
     * @param CreateClassRepresentativeRequest $request
     *
     * @return Response
     */
    public function store(CreateClassRepresentativeRequest $request)
    {
        $input = $request->all();

        $classRepresentative = $this->classRepresentativeRepository->create($input);

        Flash::success('Class Representative saved successfully.');

        return redirect(route('classRepresentatives.index'));
    }

    /**
     * Display the specified ClassRepresentative.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $classRepresentative = $this->classRepresentativeRepository->find($id);

        if (empty($classRepresentative)) {
            Flash::error('Class Representative not found');

            return redirect(route('classRepresentatives.index'));
        }

        return view('class_representatives.show')->with('classRepresentative', $classRepresentative);
    }

    /**
     * Show the form for editing the specified ClassRepresentative.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $classRepresentative = $this->classRepresentativeRepository->find($id);

        if (empty($classRepresentative)) {
            Flash::error('Class Representative not found');

            return redirect(route('classRepresentatives.index'));
        }

        return view('class_representatives.edit')->with('classRepresentative', $classRepresentative);
    }

    /**
     * Update the specified ClassRepresentative in storage.
     *
     * @param  int              $id
     * @param UpdateClassRepresentativeRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateClassRepresentativeRequest $request)
    {
        $classRepresentative = $this->classRepresentativeRepository->find($id);

        if (empty($classRepresentative)) {
            Flash::error('Class Representative not found');

            return redirect(route('classRepresentatives.index'));
        }

        $classRepresentative = $this->classRepresentativeRepository->update($request->all(), $id);

        Flash::success('Class Representative updated successfully.');

        return redirect(route('classRepresentatives.index'));
    }

    /**
     * Remove the specified ClassRepresentative from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $classRepresentative = $this->classRepresentativeRepository->find($id);

        if (empty($classRepresentative)) {
            Flash::error('Class Representative not found');

            return redirect(route('classRepresentatives.index'));
        }

        $this->classRepresentativeRepository->delete($id);

        Flash::success('Class Representative deleted successfully.');

        return redirect(route('classRepresentatives.index'));
    }
}
