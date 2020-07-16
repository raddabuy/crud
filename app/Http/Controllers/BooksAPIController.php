<?php
/**
 * Created by PhpStorm.
 * User: AlexChervon
 * Date: 02.10.2019
 * Time: 15:58
 */

namespace App\Http\Controllers;

use App\Book;
use App\Http\Controllers\Controller;

use App\Http\Requests\CreateRequest;
use App\Http\Requests\DeleteRequest;
use App\Http\Requests\UpdateRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Exception;

/**
 * Class UserAPIController
 * @package App\Http\Controllers\API
 */
class BooksAPIController extends Controller
{

    /**
     * Show Books
     * @param Request $request
     * @return mixed
     */
    public function get(Request $request)
    {

        $books = Book::all();
        return $this->responseOk($books);
    }

    /**
     * Create Book
     * @param CreateRequest $request
     * @return mixed
     */
    public function create(CreateRequest $request)
    {
        $book = Book::create(
            $request->all()
        );
        return $this->responseOk($book);
    }


    /**
     * Update Book
     * @param UpdateRequest $request
     * @return mixed
     */
    public function update(UpdateRequest $request)
    {
        $book = Book::find($request->get('id'));

        $book->update(
            $request->all()
        );
        return $this->responseOk($book);
    }

    /**
     * Delete Book
     * @param DeleteRequest $request
     * @return mixed
     */
    public function delete(DeleteRequest $request)
    {
        $book = Book::find($request->get('id'));
        $book->delete();
        return $this->responseOk('Книга удалена');
    }

}