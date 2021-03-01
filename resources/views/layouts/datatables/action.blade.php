@if(isset($product))
    @can('view', $product)
        <a href="{{ auth()->user()->is_admin ? route('admin.products.show', $product) : route('user.products.show', $product) }}"
            class="btn btn-sm btn-info">View</a>
    @endcan
    @can('update', $product)
        <a href="{{ route('admin.products.edit', $product) }}"
            class="btn btn-sm btn-warning">Edit</a>
    @endcan
    @can('delete', $product)
        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
            data-target="#deleteProductModal-{{ $product->id }}">Delete</i></a>
        <div class="modal fade" id="deleteProductModal-{{ $product->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Delete" if you want to delete the current data.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="#" onclick="event.preventDefault();
            document.getElementById('delete-product-form-{{ $product->id }}').submit();">Delete</a>
                        <form id="delete-product-form-{{ $product->id }}"
                            action="{{ route('admin.products.destroy', $product) }}"
                            method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@elseif(isset($user))
    @can('view', $user)
        <a href="{{ route('admin.users.show', $user) }}" class="btn btn-sm btn-info">View</a>
    @endcan
    @can('update', $user)
        <a href="{{ route('admin.users.edit', $user) }}" class="btn btn-sm btn-warning">Edit</a>
    @endcan
    @can('delete', $user)
        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
            data-target="#deleteUserModal-{{ $user->id }}">Delete</i></a>
        <div class="modal fade" id="deleteUserModal-{{ $user->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Delete" if you want to delete the current data.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="#" onclick="event.preventDefault();
            document.getElementById('delete-user-form-{{ $user->id }}').submit();">Delete</a>
                        <form id="delete-user-form-{{ $user->id }}"
                            action="{{ route('admin.users.destroy', $user) }}" method="POST"
                            class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@elseif(isset($role))
    @can('view', $role)
        <a href="{{ route('admin.roles.show', $role) }}" class="btn btn-sm btn-info">View</a>
    @endcan
    @can('update', $role)
        <a href="{{ route('admin.roles.edit', $role) }}" class="btn btn-sm btn-warning">Edit</a>
    @endcan
    @can('delete', $role)
        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
            data-target="#deleteRoleModal-{{ $role->id }}">Delete</i></a>
        <div class="modal fade" id="deleteRoleModal-{{ $role->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Delete" if you want to delete the current data.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="#" onclick="event.preventDefault();
            document.getElementById('delete-role-form-{{ $role->id }}').submit();">Delete</a>
                        <form id="delete-role-form-{{ $role->id }}"
                            action="{{ route('admin.roles.destroy', $role) }}" method="POST"
                            class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@elseif(isset($permission))
    @can('view', $permission)
        <a href="{{ route('admin.permissions.show', $permission) }}"
            class="btn btn-sm btn-info">View</a>
    @endcan
    @can('update', $permission)
        <a href="{{ route('admin.permissions.edit', $permission) }}"
            class="btn btn-sm btn-warning">Edit</a>
    @endcan
    @can('delete', $permission)
        <a href="#" class="btn btn-sm btn-danger" data-toggle="modal"
            data-target="#deletePermissionModal-{{ $permission->id }}">Delete</i></a>
        <div class="modal fade" id="deletePermissionModal-{{ $permission->id }}" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Data?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Delete" if you want to delete the current data.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="#" onclick="event.preventDefault();
            document.getElementById('delete-permission-form-{{ $permission->id }}').submit();">Delete</a>
                        <form id="delete-permission-form-{{ $permission->id }}"
                            action="{{ route('admin.permissions.destroy', $permission) }}"
                            method="POST" class="d-none">
                            @csrf
                            @method('DELETE')
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endcan
@endif
