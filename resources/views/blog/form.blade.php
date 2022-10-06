<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create New Blog') }}
        </h2>
    </x-slot>
    <x-slot name="content">
        <form action="{{ route('blog.submit') }}" method="POST">
            @csrf
            <div class="card">
                <div class="d-flex" style="flex-gap:25px">
                    <div class="col-8">
                        <div class=" p-5">
                            <h4>Blog Details</h4>
                            <div class="form-group">
                                <label for="" class="form-label">Title
                                    <span data-bs-toggle="tooltip" data-bs-placement="top"
                                        title="This is for title label or description. eg: Abu go walks to kitchen">
                                        <i class="fa fa-info-circle"></i>
                                    </span></label>
                                <input type="text" name="title" class="form-control" id="">
                            </div>
                            <div class="form-group mt-3">
                                <label for="category" class="form-label">Categories</label>
                                <select class="form-select w-75" aria-label="category" name="category">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}"
                                            @if(old('category') == $category->id)
                                                {{'selected'}}
                                            @endif

                                        >{{ $category->title }}</option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="form-group mt-3">
                                <label for="" class="form-label">Content/Description</label>
                                <textarea name="content" id="default-editor" cols="11" rows="3" class="form-control">{{old('content')}}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class=" p-5">
                            <h4>Author Information</h4>
                            <div class="form-group mt-3">
                                <label for="tags" class="form-label">Tags</label>
                                <select class="form-select" aria-label="tags" multiple name="tags[]">
                                    {{-- <option selected>-- Please select --</option> --}}
                                    @foreach ($tags as $tag)
                                        <option value="{{ $tag->id }}"
                                            @if(!empty(old('tags')) && in_array($tag->id, old('tags')))
                                                {{'selected'}}
                                            @endif
                                            >{{ $tag->title }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group mt-3">
                                <label for="" class="form-label">Author</label>
                                <input name="author" type="text" class="form-control" value="{{ auth()->user()->name }}">
                            </div>

                        </div>
                        <div class="row">
                            <button type="submit" class="btn btn-success w-75 m-auto mt-5">Submit <i
                                    class="fa fa-paper-plane"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        </div>

    </x-slot>
    @push('scripts')
        <script>
            $(document).ready(function() {
                $("select").select2({
                    theme: "bootstrap-5",
                });

                var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
                var tooltipList = tooltipTriggerList.map(function(tooltipTriggerEl) {
                    return new bootstrap.Tooltip(tooltipTriggerEl)
                })


                tinymce.init({
                    selector: 'textarea#default-editor'
                });

                console.log(tinymce);
            });
        </script>
    @endpush
</x-app-layout>
