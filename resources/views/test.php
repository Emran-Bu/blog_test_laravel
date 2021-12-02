<h1>test page</h1>
<ul>
    <li><a href="<?= route('web-us.test.hello') ?>">Test</a></li>
    <li><a href="<?= route('web-us.about') ?>">about</a></li>
    <!-- other rule only for file name use to url -->
    <li><a href="<?= URL::to('about') ?>">about</a></li>
    <li><a href="<?= url('about') ?>">about</a></li>
</ul>
