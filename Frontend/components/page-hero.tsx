type PageHeroProps = {
  eyebrow?: string;
  title: string;
  summary: string;
  image: string;
};

export function PageHero({ eyebrow, title, summary, image }: PageHeroProps) {
  return (
    <section className="page-hero" style={{ backgroundImage: `url(${image})` }}>
      <div className="page-hero__overlay" />
      <div className="page-hero__content">
        {eyebrow ? <p className="eyebrow">{eyebrow}</p> : null}
        <h1>{title}</h1>
        <p>{summary}</p>
      </div>
    </section>
  );
}
