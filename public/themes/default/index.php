@layout('templates.layout.base')

@section('content')
  <main role="main">
    <?php
    if (have_posts()):
      while (have_posts()):
        the_post(); ?>
        <article>
          <header>
            <h1>{{ the_title() }}</h1>
          </header>
          <?php the_content(); ?>
        </article>

      <?php
      endwhile;
    else: ?>

      <article>
        <p>Nothing to see.</p>
      </article>

    <?php
    endif; ?>
</main>
@endsection