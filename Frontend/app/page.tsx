import Link from "next/link";
import { ContentCard } from "@/components/content-card";
import { SectionHeading } from "@/components/section-heading";
import { getCollection, getPage } from "@/lib/cms";

const homeVideos = [
  {
    title: "Feature Film",
    embedUrl: "https://www.youtube.com/embed/pZIW7H1QIiw?autoplay=1&mute=1&controls=0&playsinline=1&rel=0&loop=1&playlist=pZIW7H1QIiw",
    description: "Film showcase playing directly inside the Inventor Heads website."
  },
  {
    title: "Production Reel",
    embedUrl: "https://www.youtube.com/embed/AUoUWoAIHXU",
    description: "A production and pre-production video reel embedded on the home page."
  }
];

export default function HomePage() {
  const page = getPage("home");
  const portfolio = getCollection("portfolio");
  const shows = getCollection("shows").filter((item) => item.videoEmbedUrl).slice(0, 3);
  const services = getCollection("services").slice(0, 3);

  return (
    <>
      <section className="home-video-hero">
        <div className="home-video-hero__background" aria-hidden="true">
          <iframe
            src={homeVideos[0].embedUrl}
            title="Inventor Heads autoplay background video"
            allow="autoplay; encrypted-media; picture-in-picture; web-share"
          />
        </div>
        <div className="home-video-hero__copy">
          <p className="eyebrow">{page.eyebrow}</p>
          <h1>Inventor Heads creates visual worlds.</h1>
          <p>
            Visual effects, animation, production design, and creative technology
            for films, shows, commercials, and digital-first stories.
          </p>
          <div className="home-capabilities" aria-label="Studio capabilities">
            <span>VFX</span>
            <span>Animation</span>
            <span>Production</span>
            <span>Creative Tech</span>
          </div>
          <div className="actions">
            <Link className="button" href="/portfolio">
              View Portfolio
            </Link>
            <Link className="button button--secondary" href="/shows">
              Watch Shows
            </Link>
          </div>
        </div>
        <div className="home-video-slider" aria-label="Home video slider">
          {homeVideos.slice(1).map((video) => (
            <article className="home-video-slide" key={video.title}>
              <div className="home-video-slide__player">
                <iframe
                  src={video.embedUrl}
                  title={`${video.title} video player`}
                  allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                  allowFullScreen
                />
              </div>
              <div className="home-video-slide__body">
                <h2>{video.title}</h2>
                <p>{video.description}</p>
              </div>
            </article>
          ))}
        </div>
      </section>
      <section className="section section--white">
        <div className="section-inner studio-intro">
          <SectionHeading
            eyebrow="Studio"
            title="From idea to final frame."
            summary="Inventor Heads brings production craft, animation, visual effects, and technical workflows together for video-led storytelling."
          />
          <p>
            We partner with filmmakers, creators, and brands to build cinematic
            moments with a lean studio pipeline, strong art direction, and a
            production-ready technical process.
          </p>
        </div>
      </section>
      <section className="section">
        <div className="section-inner">
          <SectionHeading
            eyebrow="Featured"
            title="Portfolio"
            summary="A cleaner structure for case studies, reels, and video-led work."
          />
          <div className="grid">
            {portfolio.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                image={item.image}
                label={item.category}
              />
            ))}
          </div>
        </div>
      </section>
      <section className="section section--white">
        <div className="section-inner">
          <SectionHeading
            eyebrow="Latest"
            title="Shows and films"
            summary="Video-led projects presented as embedded, in-site players."
          />
          <div className="grid">
            {shows.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                videoEmbedUrl={item.videoEmbedUrl}
                label={item.category}
              />
            ))}
          </div>
        </div>
      </section>
      <section className="section section--white">
        <div className="section-inner">
          <SectionHeading
            eyebrow="What we do"
            title="Services"
            summary="Migrated from the old service_type WordPress records into a CMS-ready collection."
          />
          <div className="grid">
            {services.map((item) => (
              <ContentCard
                key={item.title}
                title={item.title}
                description={item.description}
                image={item.image}
              />
            ))}
          </div>
        </div>
      </section>
    </>
  );
}
