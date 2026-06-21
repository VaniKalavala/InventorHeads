import Image from "next/image";
import { getCollection, getPage } from "@/lib/cms";

type ShowItem = ReturnType<typeof getCollection<"shows">>[number];

function showSlug(title: string) {
  return title.toLowerCase().replace(/\s+/g, "-").replace(/\./g, "");
}

function ShowMedia({ item, priority = false }: { item: ShowItem; priority?: boolean }) {
  return (
    <div className="show-info-card__media">
      {item.videoEmbedUrl ? (
        <iframe
          src={item.videoEmbedUrl}
          title={`${item.title} video player`}
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          allowFullScreen
        />
      ) : (
        <>
          <Image
            src={item.image}
            alt={item.title}
            width={760}
            height={430}
            priority={priority}
          />
          <span className="show-info-card__overlay" aria-label={`${item.videoLabel}: ${item.title}`}>
            <span className="play-button" aria-hidden="true">
              ▶
            </span>
            <span>{item.videoLabel}</span>
          </span>
        </>
      )}
    </div>
  );
}

export default function ShowsPage() {
  const page = getPage("shows");
  const shows = getCollection("shows");
  const featuredShow = shows.find((item) => item.videoEmbedUrl) ?? shows[0];
  const remainingShows = shows.filter((item) => item.title !== featuredShow.title);

  return (
    <section className="legacy-shows legacy-shows--redesign" style={{ backgroundImage: `url(${page.heroImage})` }}>
      <div className="legacy-shows__shade" />
      <div className="legacy-shows__inner">
        <div className="legacy-page-title legacy-page-title--shows">
          <p>Inventor Heads</p>
          <h1>{page.title}</h1>
          <span>{page.summary}</span>
        </div>

        <article className="shows-feature" id={showSlug(featuredShow.title)}>
          <div className="shows-feature__copy">
            <p className="item-label">{featuredShow.category}</p>
            <h2>{featuredShow.title}</h2>
            <p>{featuredShow.description}</p>
            <dl className="shows-feature__facts">
              <div>
                <dt>Network</dt>
                <dd>{featuredShow.network}</dd>
              </div>
              <div>
                <dt>Year</dt>
                <dd>{featuredShow.year}</dd>
              </div>
              <div>
                <dt>Format</dt>
                <dd>{featuredShow.format}</dd>
              </div>
            </dl>
          </div>
          <ShowMedia item={featuredShow} priority />
        </article>

        <div className="show-info-grid">
          {remainingShows.map((item) => {
            const slug = showSlug(item.title);

            return (
            <article className="show-info-card" id={slug} key={item.title}>
              <ShowMedia item={item} />

              <div className="show-info-card__body">
                <p className="item-label">{item.category}</p>
                <h2>{item.title}</h2>
                <p>{item.description}</p>
                <dl className="show-info-card__facts">
                  <div>
                    <dt>Network</dt>
                    <dd>{item.network}</dd>
                  </div>
                  <div>
                    <dt>Year</dt>
                    <dd>{item.year}</dd>
                  </div>
                  <div>
                    <dt>Format</dt>
                    <dd>{item.format}</dd>
                  </div>
                </dl>
              </div>
            </article>
          );
          })}
        </div>
      </div>
    </section>
  );
}
