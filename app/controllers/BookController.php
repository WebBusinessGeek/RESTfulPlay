<?php

class BookController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		return 'This is a <b>GET</b> request to /book and triggers the <b>Index</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually show all the books in the database</i>';
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
			return 'This is a <b>GET</b> request to /book/create and triggers the <b>Create</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually show a form to create a new Book record</i>';
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
			return 'This is a <b>POST</b> request to /book and triggers the <b>Store</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually save a new record to the database</i>';
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
			return 'This is a <b>GET</b> request to /book/'.$id.' and triggers the <b>Show</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually show all the book in the database with an id of: </i>'. $id;
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
			return 'This is a <b>GET</b> request to /book/'.$id.'/edit and triggers the <b>Edit</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually show a form to edit the book in the database with an id of:</i>'$id;
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		return 'This is a <b>POST</b> request to /book/'.$id.' and triggers the <b>Update</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually <b>post</b> the form to edit the book in the database with an id of:</i>'$id;
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		return 'This is a <b>DELETE</b> request to /book/'.$id.' and triggers the <b>Destroy</b> method on the <b>BookController</b>. <br/>'.
				'When using resrouceful routing this will be set up autmoatically for you.<br/>'.
				'Note: <i>This route would usually delete the record of the book in the database with an id of:</i>'$id;
	}


}
