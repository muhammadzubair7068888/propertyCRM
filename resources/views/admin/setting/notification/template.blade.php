<section id="accordion">
<div class="row">
<div class="col-sm-12">
    <div id="accordionWrapa1" role="tablist" aria-multiselectable="true">
        <div class="card">

            <div class="card-body">

                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionOne" aria-expanded="true"
                                aria-controls="accordionOne">
                                Accordion Item 1
                            </button>
                        </h2>
                        <div id="accordionOne" class="accordion-collapse collapse show"
                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">


                            <form class="form">

                                <div class=" col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="template">Template</label>
                                        <input type="text" id="template" class="form-control"
                                            placeholder="Template" name="template" />
                                    </div>
                                </div>

                                <div class=" col-12">
                                    <div class="mb-1">
                                        <label class="form-label" for="confirm-password">Subject</label>
                                        <input type="text" id="subject" class="form-control"
                                            placeholder="Subject" name="subject" />
                                    </div>
                                </div>
                                <div class="blog-edit-wrapper">
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-body">

                                                    <!-- Form -->
                                                    <form action="javascript:;" class="mt-2">
                                                        <div class="row">
                                                            <div class="col-9">
                                                                <div class="mb-2">
                                                                    <div id="blog-editor-wrapper">
                                                                        <div id="blog-editor-container">
                                                                            <div class="editor">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-3">
                                                                <div class="mb-2">
                                                                    <div id="blog-editor-wrapper">
                                                                        <div id="blog-editor-container">
                                                                            <h3 class="text-primary">tags</h3>
                                                                            <br>
                                                                            <h3>{agent_name}</h3>
                                                                            <h3>{agent_name}</h3>
                                                                            <h3>{agent_name}</h3>
                                                                            <h3>{agent_name}</h3>
                                                                            <h3>{agent_name}</h3>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>


                                                        </div>
                                                    </form>
                                                    <!--/ Form -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12 d-flex justify-content-end ">
                                    <button type="reset" class="btn btn-primary me-1 ">Submit</button>
                                </div>

                            </form>


                            {{-- ####### --}}
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#accordionTwo" aria-expanded="false"
                                aria-controls="accordionTwo">
                                Accordion Item 2
                            </button>
                        </h2>
                        <div id="accordionTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            {{-- ########### --}}
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</section>
