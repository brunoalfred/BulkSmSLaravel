<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateClassRepresentativeRequest;
use App\Http\Requests\UpdateClassRepresentativeRequest;
use App\Repositories\ClassRepresentativeRepository;
use App\Http\Controllers\AppBaseController;
use http\Client\Response;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Flash;
use Illuminate\Routing\Redirector;


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
     * @param Request $request
     *
     * @return Application|Factory|View|Response
     */
    public function index(Request $request)
    {
        $classRepresentatives = $this->classRepresentativeRepository->all();

        return view('class_representatives.index')->with('classRepresentatives', $classRepresentatives);
    }

    /**
     * Show the form for creating a new ClassRepresentative.
     *
     * @return Response|Application|Factory|View
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
     * @return Response|Application|RedirectResponse|Redirector
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
     * @param int $id
     *
     * @return Response|Application|Factory|View
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
     * @param int $id
     *
     * @return Response|Application|Factory|View
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
     * @param int $id
     * @param UpdateClassRepresentativeRequest $request
     *
     * @return Response|Application|RedirectResponse|Redirector
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
     * @param int $id
     *
     * @return Response|Application|RedirectResponse|Redirector
     * @throws \Exception
     *
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
