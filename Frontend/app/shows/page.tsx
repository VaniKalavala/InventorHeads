import Image from "next/image";
import Link from "next/link";
import { getCollection, getPage } from "@/lib/cms";

export default function ShowsPage() {
  const page = getPage("shows");
  const shows = getCollection("shows");

  return (
    <section className="legacy-shows" style={{ backgroundImage: `url(${page.heroImage})` }}>
      <div className="legacy-shows__shade" />
      <div className="legacy-shows__inner">
        <div className="shows-editorial-hero">
          <div className="shows-editorial-hero__primary">
            <Image
              src="/images/project_image.jpg"
              alt=""
              width={820}
              height={980}
              priority
            />
          </div>
          <div className="shows-editorial-hero__copy">
            <p>Who we are</p>
            <h1>Creators of Entertainment</h1>
            <span>
              Our team combines creativity, animation, production, and visual
              effects to craft stories that captivate audiences. We develop
              films, shows, short films, and digital-first entertainment with a
              studio pipeline built for scale.
            </span>
            <Link className="shows-editorial-hero__button" href="/portfolio">
              Learn more
            </Link>
          </div>
          <div className="shows-editorial-hero__tile shows-editorial-hero__tile--one">
            <Image src="/images/vfx-breakdown-scene.png" alt="" width={520} height={360} />
          </div>
          <div className="shows-editorial-hero__tile shows-editorial-hero__tile--two">
            <Image src="/images/project_image1.jpg" alt="" width={520} height={360} />
          </div>
        </div>

        <div className="shows-project-heading">
          <p>Shows</p>
          <h2>{page.title}</h2>
          <span>{page.summary}</span>
        </div>

        <div className="show-info-grid">
          {shows.map((item) => {
            const slug = item.title.toLowerCase().replace(/\s+/g, "-").replace(/\./g, "");

            return (
            <article className="show-info-card" id={slug} key={item.title}>
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
                    <Image src={item.image} alt="" width={520} height={330} />
                    <a
                      className="show-info-card__overlay"
                      href="#"
                      aria-disabled="true"
                      aria-label={`${item.videoLabel}: ${item.title}`}
                    >
                      <span className="play-button" aria-hidden="true">
                        ▶
                      </span>
                      <span>{item.videoLabel}</span>
                    </a>
                  </>
                )}
              </div>

              <div className="show-info-card__body">
                <h2>{item.title}</h2>
                <p>{item.description}</p>
              </div>
            </article>
          );
          })}
        </div>
      </div>
    </section>
  );
}
