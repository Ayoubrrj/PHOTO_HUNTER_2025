<section>
              <!-- PHOTOGRAPHER -->
              <article
                class="bg-white rounded-lg shadow-lg overflow-hidden flex"
              >
                <img
                  class="w-full md:w-1/3 md:h-auto object-cover"
                  src="https://picsum.photos/200/300?random=<?php echo $author['picture'];?>"
                  alt="<?php echo $author['firstname'];?> <?php echo $author['lastname'];?>"
                />

                <div class="p-4">
                  <div>
                    <h2 class="text-lg font-bold"><?php echo $author['firstname'];?> <?php echo $author['lastname'];?></h2>
                    <p class="text-sm text-gray-600">
                      Biography...
                    </p>
                  </div>
                </div>
              </article>

              <!-- SES PHOTOS -->
              <div class="pt-8">
                <h2 class="text-3xl font-bold pb-4">Ses photos</h2>
                <div class="grid grid-cols-3 gap-4">
                  <article
                    class="bg-white rounded-lg shadow-lg overflow-hidden"
                  >
                    <img
                      class="w-full h-40 object-cover"
                      src="https://picsum.photos/200/300?random="
                      alt="Nom du photo"
                    />

                    <div class="p-4">
                      <header class="pb-4">
                        <h3 class="text-lg font-bold">Photo 1</h3>
                        <div>
                          Photographe:
                          <a href="#" class="text-indigo-500 hover:underline">
                            <?php echo $author['firstname'];?> <?php echo $author['lastname'];?>
                          </a>
                        </div>
                      </header>
                      <p class="text-base text-gray-600">
                        Une photo dystopique sur une société totalitaire.
                      </p>
                      <a
                        href="photo.html"
                        class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-700"
                      >
                        En savoir plus
                      </a>
                    </div>
                  </article>
                  <article
                    class="bg-white rounded-lg shadow-lg overflow-hidden"
                  >
                    <img
                      class="w-full h-40 object-cover"
                      src="https://picsum.photos/200/300?random=2"
                      alt="Nom du photo"
                    />

                    <div class="p-4">
                      <header class="pb-4">
                        <h3 class="text-lg font-bold">Photo 2</h3>
                        <div>
                          Photographe:
                          <a href="#" class="text-indigo-500 hover:underline">
                            <?php echo $author['firstname'];?> <?php echo $author['lastname'];?>
                          </a>
                        </div>
                      </header>
                      <p class="text-base text-gray-600">
                        Une photo dystopique sur une société totalitaire.
                      </p>
                      <a
                        href="photo.html"
                        class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-700"
                      >
                        En savoir plus
                      </a>
                    </div>
                  </article>
                  <article
                    class="bg-white rounded-lg shadow-lg overflow-hidden"
                  >
                    <img
                      class="w-full h-40 object-cover"
                      src="https://picsum.photos/200/300?random=1"
                      alt="Nom du photo"
                    />

                    <div class="p-4">
                      <header class="pb-4">
                        <h3 class="text-lg font-bold">Photo 3</h3>
                        <div>
                          Photographe:
                          <a href="#" class="text-indigo-500 hover:underline">
                            <?php echo $author['firstname'];?> <?php echo $author['lastname'];?>
                          </a>
                        </div>
                      </header>
                      <p class="text-base text-gray-600">
                        Une photo dystopique sur une société totalitaire.
                      </p>
                      <a
                        href="photo.html"
                        class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-700"
                      >
                        En savoir plus
                      </a>
                    </div>
                  </article>
                </div>
              </div>
            </section>