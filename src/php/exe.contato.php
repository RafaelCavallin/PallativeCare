<div class="container">
  <div class="row">
    <div class="col-md-12 mt-4">
      <h4 class="display-4">Contato</h4>
    </div>
  </div>
</div>

<section id="contato" class="my-3">
  <div class="container">
    <div class="row justify-content-center">

      <div class="col-sm-12 col-md-6 my-1 border-right">
        <p>Se você ...</p>
        <ul>
          <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias est, vitae dolor asperiores sapiente inventore, eaque perferendis facilis et dolore amet adipisci cumque ab consequatur vero. Libero, inventore! Natus, odio.</li>
          <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Corrupti ab, itaque iusto, exercitationem id cupiditate dignissimos deserunt sed ut. Voluptatem blanditiis quis dolor officiis aperiam eligendi obcaecati, eos eius id!</li>
          <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo ut doloribus perferendis ab voluptate quibusdam iusto consequuntur sapiente facilis quae vero dolore dolores ipsum voluptates, debitis mollitia cumque. Est, aspernatur?</li>
          <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa illum amet quasi, ducimus adipisci! Possimus voluptates minima excepturi ducimus, magnam sunt saepe quasi repellat laudantium, cupiditate sed optio enim neque?</li>
          <li class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio, quisquam!</li>
        </ul>
      </div>

      <div class="col-sm-12 col-md-6 my-1">
        <form action="contato.php" method="POST">
          <legend class="text-center">Formulário Contato</legend>
          <div class="form-group">
            <label for="">Nome</label>
            <input type="text" name="nome" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" name="email" class="form-control" required>
          </div>
          <div class="form-group">
            <label for="">Mensagem</label>
            <textarea name="mensagem" class="form-control" cols="30" rows="10" required></textarea>
          </div>
          <button type="submit" class="btn btn-success mt-2 btn-block">Enviar</button>
        </form>
      </div>

    </div>
  </div>
</section>    