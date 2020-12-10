@extends('layouts.app')

@section('content')
    <form>
        <div class="form-group">
            <label for="to">To</label>
            
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Enter subject">
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <input type="textarea" class="form-control" name="message" id="message" placeholder="Enter message">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection