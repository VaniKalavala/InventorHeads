import Image from "next/image";
import Link from "next/link";
import { getCollection, getPage } from "@/lib/cms";

const showTabs = [
  { label: "Shows", href: "/shows" },
  { label: "TV Shows", href: "/shows#tv-shows" },
  { label: "Films", href: "/shows#films" },
  { label: "Short Film", href: "/shows#short-film" },
  { label: "Commercial", href: "/shows#tv-commercial" },
  { label: "Documentry", href: "/shows#documentry" }
];

export default function ShowsPage() {
  const page = getPage("shows");
  const shows = getCollection("shows");

  return (
    <section className="legacy-shows" style={{ backgroundImage: `url(${page.heroImage})` }}>
      <div className="legacy-shows__shade" />
      <div className="legacy-shows__inner">
        <nav className="legacy-subnav" aria-label="Show categories">
          {showTabs.map((item) => (
            <Link key={item.href} href={item.href}>
              {item.label}
            </Link>
          ))}
        </nav>

        <div className="legacy-page-title legacy-page-title--shows">
          <p>Inventor Heads</p>
          <h1>{page.title}</h1>
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
                    <dt>Legacy category</dt>
                    <dd>{item.legacyCategory}</dd>
                  </div>
                </dl>
                <div className="show-info-card__details">
                  <strong>Information</strong>
                  <p>{item.details}</p>
                  <small>{item.source}</small>
                </div>
              </div>
            </article>
          );
          })}
        </div>
      </div>
    </section>
  );
}
