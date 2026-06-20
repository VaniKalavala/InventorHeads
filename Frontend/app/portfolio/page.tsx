import Image from "next/image";
import { getCollection, getPage } from "@/lib/cms";

export default function PortfolioPage() {
  const page = getPage("portfolio");
  const portfolio = getCollection("portfolio");
  const featured = portfolio[0];

  return (
    <section
      className="legacy-portfolio"
      style={{ backgroundImage: `url(${page.heroImage})` }}
    >
      <div className="legacy-portfolio__shade" />
      <div className="legacy-portfolio__inner">
        <div className="legacy-page-title legacy-page-title--portfolio">
          <p>Inventor Heads</p>
          <h1>{page.title}</h1>
          <span>{page.summary}</span>
        </div>

        <section className="portfolio-reel" aria-label="Featured portfolio reel">
          <div className="portfolio-reel__copy">
            <p className="eyebrow">{featured.category}</p>
            <h2>All the works shown in video are created at Inventor Heads</h2>
            <p>{featured.details}</p>
            <a className="button" href={featured.vimeoUrl} target="_blank" rel="noreferrer">
              Open Vimeo
            </a>
          </div>
          <div className="portfolio-reel__video">
            <iframe
              src={featured.vimeoEmbedUrl}
              title={`${featured.title} Vimeo video`}
              allow="autoplay; fullscreen; picture-in-picture"
              allowFullScreen
            />
          </div>
        </section>

        <section className="portfolio-video-list" aria-label="Portfolio videos">
          {portfolio.map((item) => (
            <article className="portfolio-video-card" key={item.title}>
              <a
                className="portfolio-video-card__media"
                href={item.vimeoUrl}
                target="_blank"
                rel="noreferrer"
                aria-label={`Open ${item.title} on Vimeo`}
              >
                <Image src={item.image} alt="" width={520} height={330} />
                <span className="portfolio-video-card__overlay">
                  <span className="play-button" aria-hidden="true">
                    ▶
                  </span>
                  <span>Vimeo</span>
                </span>
              </a>
              <div className="portfolio-video-card__body">
                <p>{item.category}</p>
                <h2>{item.title}</h2>
                <span>{item.description}</span>
                <div className="portfolio-video-card__actions">
                  <a href={item.vimeoUrl} target="_blank" rel="noreferrer">
                    Watch on Vimeo
                  </a>
                  <a href="#" aria-disabled="true">
                    {item.downloadLabel}
                  </a>
                </div>
              </div>
            </article>
          ))}
        </section>
      </div>
    </section>
  );
}
