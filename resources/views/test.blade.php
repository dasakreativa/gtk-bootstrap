@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        <div class="card card-body">
            <div class="form-floating form-password-lg form-lg">
                <input type="text" class="form-control" placeholder="testing" id="test" />
                <label for="test" class="form-floating-label">Testing</label>
                <button class="form-btn-password" type="button"><i class="fa-solid fa-eye"></i></button>
            </div>
            <div class="form-floating form-password">
                <input type="text" class="form-control" placeholder="testing" id="test" />
                <label for="test" class="form-floating-label">Testing</label>
                <button class="form-btn-password" type="button"><i class="fa-solid fa-eye"></i></button>
            </div>
            <div class="form-floating form-password-sm form-sm">
                <input type="text" class="form-control" placeholder="testing" id="test" />
                <label for="test" class="form-floating-label">Testing</label>
                <button class="form-btn-password" type="button"><i class="fa-solid fa-eye"></i></button>
            </div>
        </div>

        <div class="card card-body my-3">
            <h3>Alert Regular</h3>

            <div class="alert alert-primary">
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
            </div>
            <div class="alert alert-danger alert-dismissible fade show">
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <h3>Alert Regular Icon Colored</h3>

            <div class="alert alert-primary alert-label-icon">
                <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
            </div>
            <div class="alert alert-danger alert-icon-static alert-dismissible fade show alert-label-icon">
                <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <h3>Alert Colored</h3>

            <div class="alert alert-solid-primary">
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
            </div>
            <div class="alert alert-solid-danger alert-dismissible fade show">
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <h3>Alert Icon Colored</h3>

            <div class="alert alert-solid-primary alert-label-icon">
                <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
            </div>
            <div class="alert alert-solid-danger alert-icon-static alert-dismissible fade show alert-label-icon">
                <i class="fa-solid fa-exclamation-triangle alert-icon"></i>
                <p class="m-0"><strong>Testing</strong> &mdash; Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias cum aliquam mollitia temporibus maxime quod dolore, ullam dignissimos quis autem numquam adipisci aspernatur nihil praesentium tempore rem reprehenderit repudiandae provident.</p>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>

        <div class="card card-body mb-3">
            <h3>Avatar</h3>

            <div class="d-flex">
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-xs" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-sm" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-md" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-lg" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar avatar-xl" alt="Agus" />
            </div>

            <div class="d-flex">
                <span class="avatar avatar-xs avatar-primary">3+</span>
                <span class="avatar avatar-sm avatar-primary">3+</span>
                <span class="avatar avatar-md avatar-primary">3+</span>
                <span class="avatar avatar-lg avatar-primary">3+</span>
                <span class="avatar avatar-xl avatar-primary">3+</span>
            </div>

            <div class="avatar-group">
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar" alt="Agus" />
                <img src="https://i.pravatar.cc/150?u=fake@pravatar.com" class="avatar" alt="Agus" />
                <span class="avatar avatar-primary avatar-border-white">3+</span>
            </div>
        </div>

    </div>
@endsection