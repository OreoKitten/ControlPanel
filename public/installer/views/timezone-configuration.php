<!-- top layout here -->

<?php echo cardStart(
    $title = "Timezone Configuration"
); ?>

<form method="POST" enctype="multipart/form-data" class="m-0" action="/installer/forms.php" name="timezoneConfig">

    <?php if (isset($_GET['message'])) {
        echo "<p class='not-ok check'>" . $_GET['message'] . '</p>';
    } ?>

    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <div class="flex flex-col mb-3">
                    <label for="timezone">Timezone</label>
                    <select id="timezone" name="timezone" required
                            class="px-2 py-2 bg-[#1D2125] border-2 focus:border-sky-500 box-border rounded-md border-transparent outline-none">
                        <?php
                        foreach (DateTimeZone::listIdentifiers() as $timezoneIdentifier) {
                            if ($timezoneIdentifier === 'UTC') {
                                continue;
                            }

                            echo '<option value="' . $timezoneIdentifier . '">' . $timezoneIdentifier . '</option>';
                        } ?>
                    </select>
                </div>
            </div>
        </div>
    </div>

    <div class="w-full flex justify-center">
        <button
            class="w-1/3 min-w-fit mt-2 px-4 py-2 font-bold rounded-md bg-sky-500 hover:bg-sky-600 shadow-sky-400 focus:outline-2 focus:outline focus:outline-offset-2 focus:outline-sky-500"
            name="timezoneConfig">Submit
        </button>
    </div>
</form>

<!-- bottom layout here -->