<?php

namespace App\Services\Authors\Repositories;

use App\Models\Author;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class AuthorRepository {

    public function find(int $id) {
        return Author::query()->find($id);
    }

    public function search(): LengthAwarePaginator {
        return Author::query()->orderByDesc('created_at')->paginate();
    }

    public function destroy(array $ids) {
        return Author::destroy($ids);
    }

    public function createFromArray(array $data) {
        $author = new Author();
        $author->fill($data);
        $author->save();

        return $author;
    }

    public function updateFromArray(Author $author, array $data) {
        $author->update($data);
        return $author;
    }
}
