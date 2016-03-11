<?php

namespace App\Services;

use App\Repositories\ContactRepository;

class ContactService {

    private $contactRepository;

    public function __construct(ContactRepository $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }

    public function all()
    {
        return $this->contactRepository->all();
    }

    public function destroy($id)
    {
        return $this->contactRepository->destroy($id);
    }

    public function find($id)
    {
        return $contact = $this->contactRepository->find($id);
    }

    public function create(array $data)
    {
        return $contact = $this->contactRepository->create($data);
    }
}
