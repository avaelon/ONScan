<div class="modal fade" id="manage-user-modal" tabindex="-1" role="dialog" aria-labelledby="grid-modal" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title">Add User</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
         </div>
         <form class="form theme-form" id="manage-user-form" method="Post" action="{{ route('admin.users.store') }}">
            <div class="modal-body grid-showcase">
                <div class="container-fluid bd-example-row">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input class="form-control" id="name" name="name" type="text" placeholder="Jhon" value="{{ old('name') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input class="form-control" id="email" name="email" type="email" placeholder="dummy@dummy.com" value="
                                {{ old('email') }}" required>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input class="form-control" id="password" name="password" type="password" placeholder="********" required>
                                <div class="show-hide"><span class="show"></span></div>
                            </div>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input class="form-control" id="phone" type="text" name="phone" placeholder="000 0000 000">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="designation">Designation</label>
                                <input class="form-control" id="designation" name="designation" type="text" placeholder="CEO">
                                </div>
                        </div>
                        <div class="col-md-6 ml-auto">
                            <div class="form-group">
                                <label for="role">Role</label>
                                <select class="form-control digits" name="role" id="role" required>
                                    <option disabled selected>Select Role</option>
                                    @forelse ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                    @empty
                                    <option value="" disabled>No Role Found</option>
                                    @endforelse
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button id="button" class="btn btn-primary" type="submit">Add</button>
            </div>
        </form>
    </div>
   </div>
</div>



@push('scripts')
<script>
    $(".edit-user").click(function () {
    var user = $(this).data('user');
    var action = $(this).data('action');
    $('#name').val(user.name);
    $('#email').val(user.email);
    $('#phone').val(user.phone);
    $('#designation').val(user.designation);
    $("#password").val('');
    $('#password').removeAttr('required');
    $("select[name='role'] option[value='" + user.roles[0].name ?? '' + "']").attr('selected', true);
    $('#button').html('Update');
    $('.modal-title').html('Update User');
    $('form').append('<input type="hidden" name="_method" id="put-method" value="put" />');
    $('form').attr('action', action);
    $('#manage-user-modal').modal('show');
});
$('#manage-user-modal').on('hide.bs.modal', function(){
    $('#put-method').remove();
    $('#button').html('Add');
    $("#password").attr("required", true);
    $('.modal-title').html('Add User');
    $('form').trigger("reset");
});
</script>
@endpush
