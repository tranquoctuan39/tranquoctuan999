@extends('user.layouts.master')

@section('title','Chỉnh sửa bình luận')

@section('main-content')
<div class="card">
  <h5 class="card-header">Chỉnh sửa bình luận</h5>
  <div class="card-body">
    <form action="{{route('user.post-comment.update',$comment->id)}}" method="POST">
      @csrf
      @method('PATCH')
      <div class="form-group">
        <label for="name">Người bình luận:</label>
        <input type="text" disabled class="form-control" value="{{$comment->user_info->name}}">
      </div>
      <div class="form-group">
        <label for="comment">Bình luận</label>
      <textarea name="comment" id="" cols="20" rows="10" class="form-control">{{$comment->comment}}</textarea>
      </div>
      <div class="form-group">
        <label for="status">Trạng thai :</label>
        <select name="status" id="" class="form-control">
          <option value="">--Lựa chọn trạng thái--</option>
          <option value="active" {{(($comment->status=='active')? 'selected' : '')}}>Active</option>
          <option value="inactive" {{(($comment->status=='inactive')? 'selected' : '')}}>Inactive</option>
        </select>
      </div>
      <button type="submit" class="btn btn-primary">Cập nhật</button>
    </form>
  </div>
</div>
@endsection

@push('styles')
<style>
    .order-info,.shipping-info{
        background:#ECECEC;
        padding:20px;
    }
    .order-info h4,.shipping-info h4{
        text-decoration: underline;
    }
</style>
@endpush
