<?= $this->extend('layout/page_layout'); ?>

<?= $this->section('content'); ?>

<section class="banner_area">
    <div class="banner_inner d-flex align-items-center">
        <div class="container">
            <div class="banner_content d-md-flex justify-content-between align-items-center">
                <div class="mb-3 mb-md-0">
                    <h2>Sell Service</h2>
                    <p>Sell your skill here</p>
                </div>
                <div class="page_link">
                    <a href="home">Home</a>
                    <a href="sell_services">Sell Service</a>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="section_gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <form action="" method="post">
                    <div class="mt-10">
                        <label for="judul">Title</label>
                        <input type="text" name="judul" id="judul" placeholder="Judul Project" class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="thumbnail">Thumbnail</label>
                        <input type="file" name="thumbail" id="thumbnail" placeholder="thumbnail" class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="deadline">Deadline</label>
                        <input type="text" name="deadline" id="deadline" placeholder="Deadline pengerjaan" class="single-input">
                    </div>
                    <div class="mt-10">
                        <label for="budget">Project Budget</label>
                        <input type="number" name="budget" id="budget" placeholder="Budget project" class="single-input" >
                    </div>
                    <div class="mt-10">
                        <label for="category">Category</label>
                        <div class="form-select">                      
                            <select name="category" id="category">
                                <option>Category</option>
                                <option value="Programming">Programming</option>
                                <option value="Writer">Writer</option>
                                <option value="Grapich Design">Grapich design</option>
                                <option value="Translator">Translator</option>
                                <option value="audio enginer">Audio Enginer</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-10">
                        <label for="description">Description</label>
                        <textarea name="description" id="description" cols="30" rows="5" class="single-textarea"></textarea>
                    </div>
                    <div class="mt-10 text-right">
                        <button type="submit" class="genric-btn success circle">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>