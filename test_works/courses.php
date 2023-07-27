<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses with Filter</title>
    <link href="theme.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/animate.css@4.1.1/animate.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/css/bootstrap-select.min.css">
    <link href="style_courses.css" rel="stylesheet">
</head>

<body>
    <div class="container mt-5">
        <h1 class="pb-2">Courses</h1>
        <div class="row">
            <div class="col-lg-3 ">
                <div class="filter-container border">
                    <div class="row mb-3">
                        <div class="col-12 mb-4">
                            Filter
                        </div>
                        <div class="col-12 mb-4">
                            <form>
                                <input type="text" id="searchInput" class="form-control" placeholder="Search courses...">
                            </form>
                        </div>
                        <div class="col-12 mb-4">
                            <select id="filterCategory" class="form-control selectpicker" multiple data-actions-box="true" data-selected-text-format="count > 2" data-count-selected-text="{0} Categories Selected" title="All Categories">
                                <option value="all">All Categories</option>
                                <option value="programming">Programming</option>
                                <option value="design">Design</option>
                                <option value="business">Business</option>
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <select id="filterLevel" class="form-control selectpicker" multiple data-actions-box="true" data-selected-text-format="count > 2" data-count-selected-text="{0} Levels Selected" title="All Levels">
                                <option value="all">All Levels</option>
                                <option value="beginner">Beginner</option>
                                <option value="intermediate">Intermediate</option>
                                <option value="advanced">Advanced</option>
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <select id="filterDuration" class="form-control selectpicker" multiple data-actions-box="true" data-selected-text-format="count > 2" data-count-selected-text="{0} Durations Selected" title="All Durations">
                                <option value="all">All Durations</option>
                                <option value="1-4">1-4 Weeks</option>
                                <option value="5-8">5-8 Weeks</option>
                                <option value="9+">9+ Weeks</option>
                            </select>
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-check mt-3">
                                <input type="checkbox" class="form-check-input" id="filterFree">
                                <label class="form-check-label" for="filterFree">Free Courses Only</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-9" id="courseContainer">

            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/bootstrap-select.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap-select@1.14.0-beta3/dist/js/i18n/defaults-*.min.js"></script>
    <script src="course.js"></script>
</body>

</html>