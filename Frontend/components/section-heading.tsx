type SectionHeadingProps = {
  eyebrow?: string;
  title: string;
  summary?: string;
};

export function SectionHeading({ eyebrow, title, summary }: SectionHeadingProps) {
  return (
    <div className="section-heading">
      {eyebrow ? <p className="eyebrow">{eyebrow}</p> : null}
      <h2>{title}</h2>
      {summary ? <p>{summary}</p> : null}
    </div>
  );
}
